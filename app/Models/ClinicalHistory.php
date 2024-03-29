<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $toArray)
 * @method static find(mixed $input)
 * @method static orderBy(string $string, string $string1)
 * @method static findOrFail(int $clinicalHistory)
 * @property mixed id
 */
class ClinicalHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'professional_id',
        'medical_diagnostic',
        'physiotherapist_diagnostic',
        'objective',
        'sessions_number',
        'deductible_payment',
        'payment_value',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * @return BelongsTo
     */
    public function professional(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function records(): HasMany
    {
        return $this->hasMany(ChRecord::class);
    }

    /**
     * @return HasMany
     */
    public function evolutions(): HasMany
    {
        return $this->hasMany(ChEvolution::class);
    }

    /**
     * @return HasMany
     */
    public function psychotherapeuticalAssesments(): HasMany
    {
        return $this->hasMany(ChPsychotherapeuticAssessment::class);
    }
}
