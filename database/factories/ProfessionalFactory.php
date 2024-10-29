<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professional;

class ProfessionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professional::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'extension' => $this->faker->word(),
            'thumb' => $this->faker->word(),
            'softDeletes' => $this->faker->word(),
        ];
    }
}
