<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'professional_id',
        'status',
        'notes',
        'total',
        'booked_at',
        'softDeletes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'professional_id' => 'integer',
        'total' => 'decimal:2',
        'booked_at' => 'datetime',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function professional(): BelongsTo
    {
        return $this->belongsTo(Professional::class);
    }

    public function professionalServices(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionalService::class)
            ->using(AppointmentProfessionalService::class)
            ->as('appointment_professional_service')
            ->withPivot('id', 'appointment_id', 'professional_service_id', 'price', 'service_data', 'softDeletes');
    }
}
