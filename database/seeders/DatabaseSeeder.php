<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@student.ehb.be',
            'usertype' => 'admin', 
        ]);

        User::factory()->create([
            'firstname' => 'User',
            'lastname' => 'User',
            'username' => 'User',
            'email' => 'user@student.ehb.be',
        ]);


        Category::factory()->create();
    }
}
