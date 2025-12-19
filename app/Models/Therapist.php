<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Therapist extends Model
{
    /** @use HasFactory<\Database\Factories\TherapistFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'specialization',
        'email',
        'phone',
    ];

    public function therapySessions(): HasMany
    {
        return $this->hasMany(TherapySession::class);
    }
}
