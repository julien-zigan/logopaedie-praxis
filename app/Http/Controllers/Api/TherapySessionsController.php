<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TherapySessions;
use Illuminate\Http\Request;

class TherapySessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapySessions = TherapySessions::all();
        return response()->json($therapySessions);
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

        $therapySession = TherapySessions::create($validated);

        return response()->json($therapySession, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TherapySessions $therapySessions)
    {
        return response()->json($therapySessions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TherapySessions $therapySessions)
    {
        $validated = $request->validate([
            'therapist_id' => 'sometimes|required|exists:therapists,id',
            'patient_id' => 'sometimes|required|exists:patients,id',
            'session_date' => 'sometimes|required|date',
            'duration_minutes' => 'sometimes|required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $therapySessions->update($validated);

        return response()->json($therapySessions);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TherapySessions $therapySessions)
    {
        $therapySessions->delete();
        return response()->json(null, 204);
    }
}
