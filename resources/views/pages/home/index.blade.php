@extends('layouts.app')

@section('content')
    <x-alerts.under-construction />

    <div class="grid gap-6 md:grid-cols-1 max-w-4xl mx-auto p-6">
        <a href="/app"
            class="group relative bg-white p-8 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md hover:border-green-400 transition-all duration-300">
            <div class="flex flex-col items-center text-center">
                <div
                    class="mb-4 p-3 rounded-full bg-green-50 text-green-600 group-hover:bg-green-500 group-hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Zur Web-App</h2>
                <p class="text-gray-500 text-sm">
                    Hier gelangen Sie zum Dashboard für die Verwaltung von Patienten und Sitzungen.
                </p>
                <div class="mt-6 flex items-center text-green-600 font-semibold text-sm">
                    Zur App wechseln
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </a>
    </div>
@endsection
