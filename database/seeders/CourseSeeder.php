<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentorIds = User::where('role_id', 'Mentor')->pluck('id');

        if ($mentorIds->isEmpty()) {
            $this->command->info('No mentors found. Skipping course seeding.');
            return;
        }

        Course::create([
            'title' => 'Course 1',
            'description' => 'Description 1',
            'category' => 'Category 1',
            'price' => 100.00,
            'mentor_id' => $mentorIds->random(),
        ]);

        Course::create([
            'title' => 'Course 2',
            'description' => 'Description 2',
            'category' => 'Category 2',
            'price' => 200.00,
            'mentor_id' => $mentorIds->random(),
        ]);

    }
}
