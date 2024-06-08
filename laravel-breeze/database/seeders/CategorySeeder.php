<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $categories = collect(['Education', 'General', 'Politics', 'Gaming', 'Entertainment', 'Science', 'Social', 'Technology', 'Sports', 'Music', 'Fashion', 'Food', 'Travel', 'Finance', 'History', 'Art', 'Philosophy', 'Nature', 'Other']);

        $categories->each(fn ($category) => Category::create([
            'name' => $category,
            'slug' => Str::slug($category),
        ]));
    }
}
