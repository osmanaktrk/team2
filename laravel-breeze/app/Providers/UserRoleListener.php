<?php

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use App\Models\Role;

class UserRoleListener
{
    public function handle(User $user)
    {
        // Check if roles exist
        if (!Schema::hasTable('roles')) {
            // Create roles if they don't exist
            Role::create(['name' => 'Student']);
            Role::create(['name' => 'Teacher']);
        }

        // Set default role_id to 1 (or another role ID you may add in the future)
        $user->role_id = 1;
    }
}