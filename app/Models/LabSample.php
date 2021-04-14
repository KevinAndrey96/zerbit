<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(mixed $input)
 * @method static create(array $toArray)
 */
class LabSample extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'sample_type',
        'authorized',
        'email_delivery',
        'delivery_date',
        'signature_date',
        'signed_by_himself',
        'signature',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the post that owns the comment.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
