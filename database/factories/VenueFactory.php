<?php

namespace Database\Factories;
use illuminate\Support\Str;
use App\Model\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =   $this->faker->name(); 
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'address' => $this->faker->address(),
        ];
    }
      
}  
