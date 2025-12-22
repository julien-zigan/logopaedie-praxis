@extends('layouts.app')

@section('content')
    <div class="grid gap-6 max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between bg-slate-50/50">
                <h3 class="font-bold text-slate-800">Unsere Therapeuten</h3>
                <div class="flex gap-3">
                    <span
                        class="text-xs font-medium text-slate-500 bg-slate-200 px-2 py-1 rounded-lg">{{ count($therapists) }}
                        Gesamt
                    </span>
                    <a href="/therapists/create"
                        class=" w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center shadow-lg shadow-green-200 hover:bg-green-700 hover:-translate-y-0.5 transition-all active:scale-95 z-20"
                        title="Therapeut hinzufügen">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m6-6H6">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-xs uppercase tracking-wider text-slate-400">
                            <th class="px-6 py-4 font-semibold">Name</th>
                            <th class="px-6 py-4 font-semibold">Spezialisierung</th>
                            <th class="px-6 py-4 font-semibold text-right">Aktionen</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($therapists as $therapist)
                            <tr class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">
                                            {{ $therapist->first_name['0'] . $therapist->last_name['0'] }}
                                        </div>
                                        <span class="font-bold text-slate-700">{{ $therapist->first_name . ' ' .$therapist->last_name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-medium">
                                        {{ $therapist->specialization }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('therapists.edit', $therapist->id) }}"
                                            class="text-slate-400 hover:text-blue-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>

                                        <form action="{{ route('therapists.destroy', $therapist->id) }}" method="POST"
                                            onsubmit="return confirm('Möchten Sie diesen Therapeuten wirklich löschen?');"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-400 hover:text-red-600 transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            Keine Einträge
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
