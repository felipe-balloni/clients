<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professional;
use App\Models\ProfessionalService;
use App\Models\Service;

class ProfessionalServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalService::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'professional_id' => Professional::factory(),
            'service_id' => Service::factory(),
            'price' => $this->faker->randomFloat(2, 0, 99999.99),
            'duration' => $this->faker->numberBetween(-10000, 10000),
            'softDeletes' => $this->faker->word(),
        ];
    }
}
