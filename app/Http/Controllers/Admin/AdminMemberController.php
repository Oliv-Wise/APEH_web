<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminMemberController extends Controller
{
    public function index(): View
    {
        $members = User::orderByDesc('date_inscription')->paginate(20);

        return view('admin.members.index', compact('members'));
    }

    public function destroy(int $id): RedirectResponse
    {
        $member = User::find($id);

        if ($member) {
            $member->delete();
        }

        return redirect()->route('admin.members.index')
            ->with('success', 'Membre supprimé (droit à l\'oubli RGPD appliqué).');
    }
}
