<?php

namespace App\Repositories;

use App\Models\Therapist;
use Illuminate\Support\Collection;

interface TherapistRepository
{
    public function all(): Collection;
    public function create(array $data): Therapist;
    public function update(Therapist $therapist, array $data): bool;
    public function delete(Therapist $therapist): bool|null; 
}
