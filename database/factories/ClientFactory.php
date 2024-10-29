<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cpf' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'phone' => $this->faker->phoneNumber(),
            'softDeletes' => $this->faker->word(),
        ];
    }
}
