<div class="flex items-center gap-3">
    <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-slate-200 bg-white">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D8ABC&color=fff"
            alt="{{ auth()->user()->name }}" class="w-full h-full object-cover">
    </div>
    @auth
        <form method="POST" action="{{ route('logout') }}" class="m-0">
            @csrf
            <button type="submit" title="Abmelden"
                class="w-10 h-10 flex items-center justify-center rounded-xl text-slate-400 hover:text-red-500 hover:bg-red-50 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>
    @endauth

</div>
