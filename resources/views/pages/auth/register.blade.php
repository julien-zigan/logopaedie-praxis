@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-12 px-4">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-gray-100 overflow-hidden">

            <div class="bg-blue-500 px-8 py-8 text-center">
                <h2 class="text-2xl font-black text-white tracking-tight">Konto erstellen</h2>
            </div>

            <form method="POST" action="/register" class="p-8 space-y-5">
                @csrf

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 ml-1 uppercase tracking-wider">Name</label>
                    <div class="relative group">
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full bg-slate-50 border @error('name') border-red-300 @else border-slate-200 @enderror rounded-2xl py-3 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                            placeholder="John Doe">
                    </div>
                    @error('name')
                        <p class="text-xs text-red-500 ml-1 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 ml-1 uppercase tracking-wider">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-slate-50 border @error('email') border-red-300 @else border-slate-200 @enderror rounded-2xl py-3 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                        placeholder="mail@beispiel.de">
                    @error('email')
                        <p class="text-xs text-red-500 ml-1 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 ml-1 uppercase tracking-wider">Passwort</label>
                    <input type="password" name="password" required
                        class="w-full bg-slate-50 border @error('password') border-red-300 @else border-slate-200 @enderror rounded-2xl py-3 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                        placeholder="••••••••">
                    @error('password')
                        <p class="text-xs text-red-500 ml-1 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 ml-1 uppercase tracking-wider">Bestätigung</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-2xl py-3 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                        placeholder="••••••••">
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 active:scale-95 transition-all flex items-center justify-center gap-2">
                        Registrieren
                    </button>
                </div>

                <div class="relative py-2">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-100"></div>
                    </div>
                    <div class="relative flex justify-center text-xs uppercase"><span
                            class="bg-white px-2 text-slate-400">oder</span></div>
                </div>

                <p class="text-center text-sm text-slate-500">
                    Bereits ein Konto?
                    <a href="/login" class="text-blue-600 font-bold hover:underline">Anmelden</a>
                </p>
            </form>
        </div>
    </div>
@endsection
