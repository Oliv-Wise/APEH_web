<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class MemberController extends Controller
{
    public function create(): View
    {
        return view('public.member-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lastname'      => ['required', 'string', 'max:100'],
            'firstname'     => ['required', 'string', 'max:100'],
            'email'         => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone'         => ['required', 'string', 'max:30'],
            'adresse'       => ['required', 'string', 'max:255'],
            'status'        => ['required', 'in:étudiant,professionnel,autre'],
            'custom_status' => ['nullable', 'string', 'max:100'],
            'contact'       => ['required', 'string', 'max:100'],
            'contact_phone' => ['required', 'string', 'max:30'],
            'domain'        => ['required', 'string', 'max:150'],
            'rgpd_consent'  => ['accepted'],
        ], [
            'lastname.required'     => 'Le nom est obligatoire.',
            'firstname.required'    => 'Le prénom est obligatoire.',
            'email.required'        => 'L\'adresse email est obligatoire.',
            'email.email'           => 'L\'adresse email n\'est pas valide.',
            'email.unique'          => 'Cette adresse email est déjà utilisée.',
            'phone.required'        => 'Le numéro de téléphone est obligatoire.',
            'adresse.required'      => 'L\'adresse postale est obligatoire.',
            'status.required'       => 'Le statut est obligatoire.',
            'contact.required'      => 'Le contact en Haïti est obligatoire.',
            'contact_phone.required'=> 'Le téléphone du contact en Haïti est obligatoire.',
            'domain.required'       => 'Le domaine d\'activité est obligatoire.',
            'rgpd_consent.accepted' => 'Vous devez accepter la politique de confidentialité.',
        ]);

        $statut = $validated['status'] === 'autre' && ! empty($validated['custom_status'])
            ? $validated['custom_status']
            : $validated['status'];

        User::create([
            'nom'           => $validated['lastname'],
            'prenom'        => $validated['firstname'],
            'email'         => $validated['email'],
            'telephone'     => $validated['phone'],
            'adresse'       => $validated['adresse'],
            'contact_nom'   => $validated['contact'],
            'contact_phone' => $validated['contact_phone'],
            'domaine'       => $validated['domain'],
            'statut'        => $statut,
            'rgpd_consent'  => true,
        ]);

        // Envoi d'email de confirmation (silencieux si SMTP non configuré)
        try {
            Mail::send('emails.inscription', ['prenom' => $validated['firstname']], function ($m) use ($validated) {
                $m->to($validated['email'], $validated['firstname'].' '.$validated['lastname'])
                  ->subject('Bienvenue dans l\'APEH-France !');
            });
        } catch (\Exception $e) {
            // Log l'erreur sans bloquer l'inscription
            \Log::warning('Email de confirmation non envoyé : '.$e->getMessage());
        }

        return redirect()->route('member.confirmation');
    }

    public function confirmation(): View
    {
        return view('public.member-confirmation');
    }
}
