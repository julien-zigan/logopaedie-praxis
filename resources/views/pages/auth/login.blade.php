@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto my-12 px-4">
    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-gray-100 overflow-hidden">
        
        <div class="bg-blue-500 px-8 py-8 text-center">
            <h2 class="text-2xl font-black text-white tracking-tight">Login</h2>
        </div>

        <form method="POST" action="/login" class="p-8 space-y-6">
            @csrf

            <div class="space-y-1.5">
                <label class="text-xs font-bold text-slate-500 ml-1 uppercase tracking-wider">Email</label>
                <div class="relative group">
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full bg-slate-50 border @error('email') border-red-300 @else border-slate-200 @enderror rounded-2xl py-3.5 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                        placeholder="name@beispiel.de">
                </div>
                @error('email') <p class="text-xs text-red-500 ml-1 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-1.5">
                <div class="flex justify-between items-center px-1">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Passwort</label>
                    <a href="/forgot-password" class="text-xs font-bold text-blue-600 hover:underline">Vergessen?</a>
                </div>
                <input type="password" name="password" required
                    class="w-full bg-slate-50 border @error('password') border-red-300 @else border-slate-200 @enderror rounded-2xl py-3.5 px-4 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none"
                    placeholder="••••••••">
                @error('password') <p class="text-xs text-red-500 ml-1 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center ml-1">
                <input type="checkbox" name="remember" id="remember" class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-slate-500 font-medium cursor-pointer">Angemeldet bleiben</label>
            </div>

            <div class="pt-2">
                <button type="submit" 
                    class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 active:scale-95 transition-all flex items-center justify-center gap-2">
                    Anmelden
                </button>
            </div>

            <div class="relative py-2">
                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-100"></div></div>
                <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-2 text-slate-400">oder</span></div>
            </div>

            <p class="text-center text-sm text-slate-500">
                Neu hier? 
                <a href="/register" class="text-blue-600 font-bold hover:underline">Konto erstellen</a>
            </p>
        </form>
    </div>
</div>
@endsection