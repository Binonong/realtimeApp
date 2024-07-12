<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Question;
use App\Models\Category;
use App\Models\User;
use Faker\Generator as Faker;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->text,
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()
            
        ];
    }
}
