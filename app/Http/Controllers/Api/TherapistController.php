<?php

namespace App\Http\Controllers\Api;

use App\Models\Therapist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapists = Therapist::all();
        return response()->json($therapists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'email' => 'required|email|unique:therapists,email',
            'phone' => 'required|string|max:20',
        ]);

        $therapist = Therapist::create($validated);

        return response()->json($therapist, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapist $therapist)
    {
        return response()->json($therapist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Therapist $therapist)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'specialization' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:therapists,email,' . $therapist->id,
            'phone' => 'sometimes|required|string|max:20',
        ]);

        $therapist->update($validated);

        return response()->json($therapist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Therapist $therapist)
    {
    
        $therapist->delete();
        return response()->json(null, 204);
    }
}
