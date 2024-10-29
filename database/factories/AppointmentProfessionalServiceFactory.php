<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\AppointmentProfessionalService;
use App\Models\ProfessionalService;

class AppointmentProfessionalServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentProfessionalService::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'appointment_id' => Appointment::factory(),
            'professional_service_id' => ProfessionalService::factory(),
            'price' => $this->faker->randomFloat(2, 0, 99999.99),
            'service_data' => '{}',
            'softDeletes' => $this->faker->word(),
        ];
    }
}
