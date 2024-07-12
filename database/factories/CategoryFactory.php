<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Question;
use App\Models\Category;
use App\Models\User;
use Faker\Generator as Faker;
class CategoryFactory extends Factory
{   protected $model = Category::class;
   
    public function definition()
    {
        $word = $this->faker->sentence();
        return [
            'name' => $word,
            'slug' => Str::slug($word)
           
        ];
    }
}
