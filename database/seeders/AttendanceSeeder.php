<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'Student')->first()->id)->first();
        $course = Course::first(); // Assuming you have a course

        Attendance::factory()->create([
            'date' => now()->subDays(1),
            'user_id' => $user->id,
            'course_id' => $course->id,
        ]);
    }
}
