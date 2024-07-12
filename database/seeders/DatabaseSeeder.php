<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(5)->create();
        Question::factory(10)->create();
        Reply::factory(50)->create()->each(function ($reply){
        
            return $reply->like()->save(User::factory()->make());
        });
    }
}
