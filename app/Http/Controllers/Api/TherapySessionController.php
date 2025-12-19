<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TherapySessionResource;
use App\Models\TherapySession;
use Illuminate\Http\Request;

class TherapySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapySessions = TherapySession::with(['therapist', 'patient'])->get();
        return TherapySessionResource::collection($therapySessions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'therapist_id' => 'required|exists:therapists,id',
            'patient_id' => 'required|exists:patients,id',
            'session_date' => 'required|date',
            'duration_minutes' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $therapySession = TherapySession::create($validated);

        return response()->json($therapySession, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TherapySession $therapySession)
    {
        return response()->json($therapySession);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TherapySession $therapySession)
    {
        $validated = $request->validate([
            'therapist_id' => 'sometimes|required|exists:therapists,id',
            'patient_id' => 'sometimes|required|exists:patients,id',
            'session_date' => 'sometimes|required|date',
            'duration_minutes' => 'sometimes|required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $therapySession->update($validated);

        return response()->json($therapySession);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TherapySession $therapySession)
    {
        $therapySessions->delete();
        return response()->json(null, 204);
    }
}
