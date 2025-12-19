 <div class="space-y-6">
     <details class="group bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
         <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
             <div class="flex items-center gap-4">
                 <h3 class="text-xl font-semibold text-gray-800 underline decoration-blue-500">
                     Therapeuten-Verwaltung
                 </h3>
                 <code class="text-sm bg-gray-100 px-2 py-1 rounded">/api/therapists</code>
             </div>
             <span class="transition group-open:rotate-180">
                 <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                     <path d="M6 9l6 6 6-6"></path>
                 </svg>
             </span>
         </summary>

         <div class="px-6 pb-6">
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
     </details>
 </div>