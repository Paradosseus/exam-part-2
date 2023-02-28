<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomDescription' =>fake() ->catchPhrase(),
            'roomCapacity' =>fake() -> numberBetween($min = 1, $max = 12),
            'dateFrom' =>fake() -> date($format = 'Y-m-d', $max = 'now'),
            'dateTo' =>fake() -> date($format = 'Y-m-d', $max = '+30 years')
        ];
    }
}
