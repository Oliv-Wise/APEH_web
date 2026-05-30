@extends('layouts.admin')

@section('title', 'Membres inscrits')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="font-display text-xl font-bold text-apeh-blue">Membres inscrits</h2>
        <p class="text-sm text-gray-500 mt-1">{{ $members->total() }} membre(s) au total</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    @if($members->count() > 0)
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100">
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide">Membre</th>
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden lg:table-cell">Email</th>
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden md:table-cell">Téléphone</th>
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden xl:table-cell">Domaine</th>
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden md:table-cell">Statut</th>
                    <th class="text-left px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide hidden lg:table-cell">Inscription</th>
                    <th class="text-right px-4 py-4 font-semibold text-gray-600 text-xs uppercase tracking-wide">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($members as $member)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-apeh-light flex items-center justify-center text-apeh-blue font-bold text-xs flex-shrink-0">
                                {{ strtoupper(substr($member->prenom, 0, 1)) }}{{ strtoupper(substr($member->nom, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">{{ $member->prenom }} {{ $member->nom }}</p>
                                <p class="text-xs text-gray-400 lg:hidden">{{ $member->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-gray-600 hidden lg:table-cell">
                        <a href="mailto:{{ $member->email }}" class="hover:text-apeh-blue transition-colors">
                            {{ $member->email }}
                        </a>
                    </td>
                    <td class="px-4 py-4 text-gray-600 hidden md:table-cell">{{ $member->telephone }}</td>
                    <td class="px-4 py-4 text-gray-600 hidden xl:table-cell">{{ $member->domaine }}</td>
                    <td class="px-4 py-4 hidden md:table-cell">
                        <span class="badge bg-apeh-light text-apeh-blue text-xs">{{ $member->statut }}</span>
                    </td>
                    <td class="px-4 py-4 text-gray-500 text-xs hidden lg:table-cell">
                        {{ $member->date_inscription ? $member->date_inscription->format('d/m/Y') : '—' }}
                    </td>
                    <td class="px-4 py-4 text-right">
                        <form method="POST" action="{{ route('admin.members.destroy', $member->id) }}"
                              onsubmit="return confirm('Supprimer ce membre ? Cette action est irréversible (RGPD – droit à l\'oubli).')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-xs text-red-500 hover:text-red-700 font-medium transition-colors"
                                    aria-label="Supprimer {{ $member->prenom }} {{ $member->nom }}">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-gray-100">
        {{ $members->links() }}
    </div>

    @else
    <div class="text-center py-16">
        <span class="text-5xl block mb-4">👥</span>
        <p class="text-gray-500">Aucun membre inscrit pour le moment.</p>
    </div>
    @endif
</div>

<div class="mt-6 bg-amber-50 border border-amber-200 rounded-xl p-4 text-sm text-amber-800">
    <strong>⚠️ RGPD :</strong> La suppression d'un membre efface définitivement toutes ses données personnelles conformément au droit à l'oubli. Cette action est irréversible.
</div>

@endsection
