<?php

namespace Tests;

use App\Models\Role;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Manually set the IDs of the roles
        $studentId = 1;
        $teacherId = 2;

        // Find or create roles with the specified IDs
        $student = Role::firstOrCreate(['id' => $studentId], ['name' => 'Student']);
        $teacher = Role::firstOrCreate(['id' => $teacherId], ['name' => 'Teacher']);

        // Ensure the roles have the correct IDs
        $student->id = $studentId;
        $student->save();
        $teacher->id = $teacherId;
        $teacher->save();
    }
}
