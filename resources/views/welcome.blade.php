<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logopädie API | Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <header class="bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4 py-12 text-center">
            <h1 class="text-4xl font-extrabold text-blue-600 tracking-tight">Logopädie Manager API</h1>
            <p class="mt-4 text-lg text-gray-600">Willkommen in Ihrer Praxisverwaltung. Nutzen Sie die Schnittstellen unten, um Ihre Therapeuten-Daten zu verwalten.</p>
            <div class="mt-6">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                    System Online
                </span>
            </div>
        </div>
    </header>

    <div class="bg-amber-50 border-l-4 border-amber-400 p-4 my-8 rounded-r-lg shadow-sm">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-bold text-amber-800 uppercase tracking-wide">
                    API im Aufbau
                </h3>
                <div class="mt-1 text-sm text-amber-700">
                    <p>
                        Diese Schnittstelle befindet sich aktuell in der Entwicklung. Derzeit sind nur einige <strong>Therapeuten-Endpunkte</strong> aktiv. Funktionen für Patienten, Termine und Abrechnungen werden kontinuierlich hinzugefügt.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="max-w-5xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Verfügbare Endpunkte</h2>

        <div class="space-y-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 underline decoration-blue-500">Therapeuten-Verwaltung</h3>
                        <code class="text-sm bg-gray-100 px-2 py-1 rounded">/api/therapists</code>
                    </div>

                    <div class="grid gap-6 md:grid-cols-1">
                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-blue-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">GET</span>
                                <div>
                                    <p class="font-bold text-slate-800">Alle Therapeuten laden</p>
                                    <code class="text-xs text-blue-600">/api/therapists</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                                    GET /api/therapists
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                                    [{"id": 1, "name": "Max"}]
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-green-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">POST</span>
                                <div>
                                    <p class="font-bold text-slate-800">Neuen Therapeuten anlegen</p>
                                    <code class="text-xs text-green-600">/api/therapists</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Payload</p>
                                    {"name": "Erika", "email": "e@web.de"}
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (201)</p>
                                    {"id": 2, "name": "Erika"}
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-orange-400">
                            <div class="flex items-start mb-4">
                                <span class="bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">PUT</span>
                                <div>
                                    <p class="font-bold text-slate-800">Therapeut aktualisieren</p>
                                    <code class="text-xs text-orange-600">/api/therapists/{id}</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request (ID: 1)</p>
                                    {"phone": "012345"}
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                                    {"id": 1, "phone": "012345"}
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-red-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">DEL</span>
                                <div>
                                    <p class="font-bold text-slate-800">Therapeut entfernen</p>
                                    <code class="text-xs text-red-600">/api/therapists/{id}</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                                    DELETE /api/therapists/1
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (204)</p>
                                    [No Content]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 underline decoration-blue-500">Patientten-Verwaltung</h3>
                        <code class="text-sm bg-gray-100 px-2 py-1 rounded">/api/patients</code>
                    </div>

                    <div class="grid gap-6 md:grid-cols-1">
                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-blue-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">GET</span>
                                <div>
                                    <p class="font-bold text-slate-800">Patientenliste abrufen</p>
                                    <code class="text-xs text-blue-600">/api/patients</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                                    GET /api/patients
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                                    [{"id": 1, "name": "Hans Müller", "birthdate": "1945-03-12"}]
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-green-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">POST</span>
                                <div>
                                    <p class="font-bold text-slate-800">Neuen Patienten anlegen</p>
                                    <code class="text-xs text-green-600">/api/patients</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Payload (Date: YYYY-MM-DD)</p>
                                    {
                                    "name": "Lukas (Kind)",
                                    "birthdate": "2018-06-15",
                                    "legal_representative": "Maria Musterfrau"
                                    }
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (201)</p>
                                    {
                                    "id": 102,
                                    "name": "Lukas (Kind)",
                                    "legal_representative": "Maria Musterfrau"
                                    }
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-orange-400">
                            <div class="flex items-start mb-4">
                                <span class="bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">PUT</span>
                                <div>
                                    <p class="font-bold text-slate-800">Patientendaten ändern</p>
                                    <code class="text-xs text-orange-600">/api/patients/{id}</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request (z.B. Vormund ändern)</p>
                                    {
                                    "legal_representative": "Neuer Betreuer Name"
                                    }
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                                    {
                                    "id": 102,
                                    "legal_representative": "Neuer Betreuer Name"
                                    }
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-red-500">
                            <div class="flex items-start mb-4">
                                <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">DEL</span>
                                <div>
                                    <p class="font-bold text-slate-800">Patienten löschen</p>
                                    <code class="text-xs text-red-600">/api/patients/{id}</code>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                                <div class="bg-slate-800 p-3 rounded text-blue-300">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                                    DELETE /api/patients/102
                                </div>
                                <div class="bg-slate-900 p-3 rounded text-green-400">
                                    <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (204)</p>
                                    [No Content]
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>

    <footer class="text-center py-8 text-gray-400 text-sm">
        &copy; {{ date('Y') }} Logopädie Praxis Verwaltung. Alle Rechte vorbehalten.
    </footer>

</body>

</html>