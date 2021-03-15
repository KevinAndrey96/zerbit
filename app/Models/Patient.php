<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'document',
        'email',
        'phone',
        'address',
        'guardian',
        'guardian_relationship',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the comments for the blog post.
     */
    public function labSamples(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LabSample::class);
    }
}
