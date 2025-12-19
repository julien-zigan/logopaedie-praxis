<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $patient = Patient::create($validated);

        return response()->json($patient, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return response()->json($patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'date_of_birth' => 'sometimes|required|date',
            'email' => 'sometimes|required|email|unique:patients,email,' . $patient->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $patient->update($validated);

        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json(null, 204);
    }
}
