<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ChPsychotherapeuticAssessment
 * @package App\Models
 * @method static create(array $toArray)
 */
class ChPsychotherapeuticAssessment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clinical_history_id',
        'pain',
        'edema',
        'joint_mobility',
        'sensitivity',
        'integumentary_system',
        'muscular_strength',
        'flexibility',
        'posture',
        'march',
        'balance',
        'falling_risk',
        'other_valuations',
        'objective2',
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
    public function clinicalHistory(): BelongsTo
    {
        return $this->belongsTo(ClinicalHistory::class);
    }
}
