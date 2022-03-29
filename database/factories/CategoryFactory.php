<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // $table->id();
    // $table->string('name');
    // $table->string('description')->nulltable();
    // $table->string('slug')->unique();
    // $table->tinyInteger('status')->default(0);
    public function definition()
    
    {
        $name = $this->faker->name();
        $slug = Str::slug($name, '_');
        return [
            //
            'name'=>$name,
            'description'=>$this->faker->text(),
            'status'=>$this->faker->numberBetween(0,1),
            'slug'=>$slug

        ];
    }
}
