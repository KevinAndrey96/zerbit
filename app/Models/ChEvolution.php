<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ChEvolution
 * @package App\Models
 * @method static create(array $toArray)
 * @method static find(mixed $input)
 */
class ChEvolution extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clinical_history_id',
        'evolution_text',
        'evolution_date',
        'start_time',
        'end_time',
        'signature',
        'observation'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'signature'
    ];

    /**
     * @return BelongsTo
     */
    public function clinicalHistory(): BelongsTo
    {
        return $this->belongsTo(ClinicalHistory::class);
    }
}
