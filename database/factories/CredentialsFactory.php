<?php

namespace Database\Factories;

use App\Enums\CredentialType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credentials>
 */
class CredentialsFactory extends Factory
{
    protected $model = \App\Models\Credentials::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->sentence,
            'type' => [
                'type' => CredentialType::Bearer_auth,
                'prefix' => 'Bearer'
            ],
            'value' => $this->faker->uuid(),
            'user_id'=> \App\Models\User::factory()
        ];
    }
}
