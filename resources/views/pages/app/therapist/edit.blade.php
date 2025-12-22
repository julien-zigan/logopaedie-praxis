@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-gray-100 overflow-hidden">

            <div class="bg-orange-400 px-8 py-6">
                <h2 class="text-xl font-bold text-white">Therapeuten bearbeiten</h2>
            </div>

            <form action="{{ route('therapists.update', $therapist) }}" method="POST" class="p-8 space-y-6">

                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6">

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Vorname</label>
                        <div class="relative group">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <input type="text" name="first_ame" required
                                class="w-full bg-slate-50 border border-slate-200 rounded-2xl py-3 pl-12 pr-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                                placeholder="z.B. Dr. Aris Müller" value="{{ old('name', $therapist->name) }}">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Nachname</label>
                        <div class="relative group">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <input type="text" name="last_ame" required
                                class="w-full bg-slate-50 border border-slate-200 rounded-2xl py-3 pl-12 pr-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                                placeholder="z.B. Dr. Aris Müller" value="{{ old('name', $therapist->name) }}">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Spezialisierung</label>
                        <div class="relative group">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 group-focus-within:text-green-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </span>
                            <select name="specialization"
                                class="w-full bg-slate-50 border border-slate-200 rounded-2xl py-3 pl-12 pr-4 text-slate-800 focus:bg-white focus:ring-4 focus:ring-green-100 focus:border-green-500 transition-all outline-none appearance-none">
                                <option value="">Bitte wählen...</option>
                                <option value="Kindersprache"
                                    {{ old('specialization', $therapist->specialization ?? '') == 'Kindersprache' ? 'selected' : '' }}>
                                    Kindersprache
                                </option>
                                <option value="Neurologische Logopädie"
                                    {{ old('specialization', $therapist->specialization ?? '') == 'Neurologische Logopädie' ? 'selected' : '' }}>
                                    Neurologische Logopädie
                                </option>
                                <option value="Stimmstörungen"
                                    {{ old('specialization', $therapist->specialization ?? '') == 'Stimmstörungen' ? 'selected' : '' }}>
                                    Stimmstörungen
                                </option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-100">
                    <button type="button" onclick="window.history.back()"
                        class="px-6 py-3 rounded-2xl text-sm font-bold text-slate-500 hover:bg-slate-100 transition-colors">
                        Abbrechen
                    </button>
                    <button type="submit"
                        class="bg-orange-400 text-white px-8 py-3 rounded-2xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 active:scale-95 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Änderungen speichern
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
