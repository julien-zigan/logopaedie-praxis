<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TherapySessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'therapist' => new TherapistResource($this->whenLoaded('therapist')),
            'patient' => new PatientResource($this->whenLoaded('patient')),
            'sessionDate' => $this->session_date,
            'durationMinutes' => $this->duration_minutes,
            'notes' => $this->notes,
        ];
    }
}
