<?php

namespace Database\Seeders;

use App\Models\UserModel;
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

        UserModel::factory()->create([
            'firstname' => 'Test User',
            'lastname' => 'Test User',
            'username' => 'Test User',
            'email' => 'test@student.ehb.be',
        ]);
    }
}
