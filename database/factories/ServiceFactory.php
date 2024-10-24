<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'url' => $this->faker->url,
            'user_id' => User::factory(),
        ];
    }
}
