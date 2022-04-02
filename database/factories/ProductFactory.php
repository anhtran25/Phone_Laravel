<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        
        return [
            //
            'name'=>$name,
            'price'=>$this->faker->numberBetween(1-10),
            'quantity'=>$this->faker->numberBetween(1-10),
            'image'=>$this->faker->text(),
            'descripton'=>$this->faker->text(),
            'status'=>$this->faker->numberBetween(0,1),
            'category_id'=>$this->faker->numberBetween(1-3),
            

        ];
    }
}
