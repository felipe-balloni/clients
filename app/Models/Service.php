<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'softDeletes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(Professional::class)
            ->using(ProfessionalService::class)
            ->as('professional_service')
            ->withPivot('id', 'professional_id', 'service_id', 'price', 'duration', 'softDeletes')
            ->withTimestamps();
    }
}