<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Student role
        Role::factory()->create([
            'name' => 'Student',
        ]);

        // Create Teacher role
        Role::factory()->create([
            'name' => 'Teacher',
        ]);
    }
}
