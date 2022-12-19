<?php

namespace Database\Factories\Park;

use App\Models\HR\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position' => $this->faker->numberBetween(1,250),
            'employee_id' => Employee::factory(),
        ];
    }
}
