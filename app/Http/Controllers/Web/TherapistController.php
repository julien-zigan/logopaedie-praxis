<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Therapist;
use App\Repositories\TherapistRepository;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    private TherapistRepository $repository;

    public function __construct(TherapistRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapists = $this->repository->all();

        return view('pages.app.therapist.index', compact('therapists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.therapist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'string|max:255|nullable',
        ]);

        $therapist = $this->repository->create($validated);

        return redirect()->route('therapists.index')
            ->with('success', "{$therapist->name} erfolgreich erstellt!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapist $therapist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Therapist $therapist)
    {
        return view('pages.app.therapist.edit', compact('therapist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Therapist $therapist)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'string|max:255|nullable',
        ]);

        $this->repository->update($therapist, $validated);

        return redirect()->route('therapists.index')
            ->with('success', "{$therapist->name} erfolgreich bearbeitet!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Therapist $therapist)
    {
        $this->repository->delete($therapist);

        return redirect()->route('therapists.index')
            ->with('success', "{$therapist->name} gelöscht!");
    }
}
