<nav class="sticky top-0 z-50 w-full px-4 py-3">
    <div class="max-w-7xl mx-auto bg-white/80 backdrop-blur-md border border-gray-200 shadow-lg shadow-slate-200/50 rounded-2xl h-16 flex items-center justify-between px-6">

        <div class="flex items-center gap-6">
            <x-appbar.logo />
            <x-appbar.nav />
        </div>

        <div class="flex items-center gap-2">
            @auth
                <x-appbar.profile-menu />
            @else
                <a href="/login" class="px-4 py-2 text-sm font-bold text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                    Anmelden
                </a>

                <a href="/register" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold shadow-md shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 active:scale-95 transition-all">
                    Registrieren
                </a>
            @endauth
        </div>
    </div>
</nav>
