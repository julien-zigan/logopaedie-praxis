<?php

namespace App\Repositories;

use App\Models\Therapist;
use Illuminate\Support\Collection;

class DbTherapistRepository implements TherapistRepository
{
    public function all(): Collection
    {
        return Therapist::latest()->get();
    }

    public function create(array $data): Therapist
    {
        return auth()->user()->therapists()->create($data);
    }

    public function update(Therapist $therapist, array $data): bool
    {
        return $therapist->update($data);
    }

    public function delete(Therapist $therapist): bool|null
    {
        return $therapist->delete();
    }
}
