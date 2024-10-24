<?php

namespace Database\Factories;

use App\Models\Credentials;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Check>
 */
class CheckFactory extends Factory
{
    protected $model = \App\Models\Check::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'path' => $this->faker->filePath(),
            'method' => 'GET',
            'body' => null,
            'headers' => null,
            'parameters' => null,
            'credential_id' => $this->faker->boolean()
                ? Credentials::factory()
                :   null,
            'service_id' => \App\Models\Service::factory()
        ];
    }
}
