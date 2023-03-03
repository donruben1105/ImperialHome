<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()    
    {        
        return [            
            'propertyName' => $this->faker->sentence(),            
            'propertyType' => $this->faker->sentence(),            
            'model' => $this->faker->paragraph(1),          
            'tags' => 'For sale,For rent',             
            'location' => $this->faker->sentence(),            
            'price' => $this->faker->randomDigit(),                
            'description' => $this->faker->paragraph(3),       
         ];    
        }
}
