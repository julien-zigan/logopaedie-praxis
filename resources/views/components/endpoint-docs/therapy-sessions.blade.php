<div class="space-y-6">
     <details class="group bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
         <summary class="flex items-center justify-between p-6 cursor-pointer list-none hover:bg-gray-50 transition-colors">
             <div class="flex items-center gap-4">
                 <h3 class="text-xl font-semibold text-gray-800 underline decoration-blue-500">Sitzungs-Verwaltung</h3>
                 <code class="text-sm bg-gray-100 px-2 py-1 rounded">/api/therapy-sessions</code>
             </div>
             <span class="transition-transform duration-300 group-open:rotate-180 text-gray-400">
                 <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24">
                     <path d="M6 9l6 6 6-6"></path>
                 </svg>
             </span>
         </summary>

         <div class="px-6 pb-6 border-t border-gray-50 pt-4">
             <div class="grid gap-6 md:grid-cols-1">

                 <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-blue-500">
                     <div class="flex items-start mb-4">
                         <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">GET</span>
                         <div>
                             <p class="font-bold text-slate-800">Sitzungsliste (mit Patient & Therapeut)</p>
                             <code class="text-xs text-blue-600">/api/therapy-sessions</code>
                         </div>
                     </div>
                     <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                         <div class="bg-slate-800 p-3 rounded text-blue-300">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                             GET /api/therapy-sessions
                         </div>
                         <div class="bg-slate-900 p-3 rounded text-green-400">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                             [{
                             "id": 50,
                             "date": "2024-10-25 14:00",
                             "patient": {"id": 1, "name": "Hans Müller"},
                             "therapist": {"id": 1, "name": "Max"}
                             }]
                         </div>
                     </div>
                 </div>

                 <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-green-500">
                     <div class="flex items-start mb-4">
                         <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">POST</span>
                         <div>
                             <p class="font-bold text-slate-800">Neue Sitzung planen</p>
                             <code class="text-xs text-green-600">/api/therapy-sessions</code>
                         </div>
                     </div>
                     <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                         <div class="bg-slate-800 p-3 rounded text-blue-300">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Payload</p>
                             {
                             "patient_id": 1,
                             "therapist_id": 1,
                             "session_date": "2024-10-25 14:00"
                             }
                         </div>
                         <div class="bg-slate-900 p-3 rounded text-green-400">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (201)</p>
                             { "id": 50, "status": "scheduled" }
                         </div>
                     </div>
                 </div>

                 <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-orange-400">
                     <div class="flex items-start mb-4">
                         <span class="bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">PUT</span>
                         <div>
                             <p class="font-bold text-slate-800">Sitzung korrigieren / verschieben</p>
                             <code class="text-xs text-orange-600">/api/therapy-sessions/{id}</code>
                         </div>
                     </div>
                     <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                         <div class="bg-slate-800 p-3 rounded text-blue-300">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Request (z.B. Zeit-Korrektur)</p>
                             {
                             "session_date": "2024-10-25 15:30",
                             "notes": "Termin wurde telefonisch verschoben"
                             }
                         </div>
                         <div class="bg-slate-900 p-3 rounded text-green-400">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (200)</p>
                             {
                             "id": 50,
                             "date": "2024-10-25 15:30",
                             "updated_at": "..."
                             }
                         </div>
                     </div>
                 </div>

                 <div class="flex flex-col p-4 border rounded-lg bg-white shadow-sm border-l-4 border-l-red-500">
                     <div class="flex items-start mb-4">
                         <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded mr-3">DEL</span>
                         <div>
                             <p class="font-bold text-slate-800">Sitzung stornieren</p>
                             <code class="text-xs text-red-600">/api/therapy-sessions/{id}</code>
                         </div>
                     </div>
                     <div class="grid md:grid-cols-2 gap-4 text-xs font-mono">
                         <div class="bg-slate-800 p-3 rounded text-blue-300">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Request</p>
                             DELETE /api/therapy-sessions/50
                         </div>
                         <div class="bg-slate-900 p-3 rounded text-green-400">
                             <p class="text-[10px] uppercase mb-1 text-slate-500">// Response (204)</p>
                             [No Content]
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </details>
 </div>