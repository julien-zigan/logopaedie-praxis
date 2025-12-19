<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TherapySessions extends Model
{
    /** @use HasFactory<\Database\Factories\TherapySessionsFactory> */
    use HasFactory;

    protected $fillable = [
        'therapist_id',
        'patient_id',
        'session_date',
        'duration_minutes',
        'notes',
    ];

    public function therapist(): BelongsTo
    {
        return $this->belongsTo(Therapist::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
