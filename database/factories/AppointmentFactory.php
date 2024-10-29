<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Client;
use App\Models\Professional;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory(),
            'professional_id' => Professional::factory(),
            'status' => $this->faker->word(),
            'notes' => $this->faker->text(),
            'total' => $this->faker->randomFloat(2, 0, 99999.99),
            'booked_at' => $this->faker->dateTime(),
            'softDeletes' => $this->faker->word(),
        ];
    }
}
