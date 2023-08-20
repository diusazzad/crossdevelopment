<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user IDs
        $userIds = User::pluck('id');

        foreach ($userIds as $userId) {
            UserProfile::create([
                'user_id' => $userId,
                'bio' => 'Sample bio for user ' . $userId,
                'birthdate' => Carbon::now()->subYears(rand(18, 40))->subMonths(rand(0, 11))->subDays(rand(0, 30)),
                'location' => 'Sample location for user ' . $userId,
                'website' => 'https://www.example.com/user' . $userId,
                'gender' => ['male', 'female', 'other'][rand(0, 2)],
                'phone' => '123-456-7890',
                'interests' => 'Sample interests for user ' . $userId,
                'occupation' => 'Sample occupation for user ' . $userId,
                'timezone' => 'UTC',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
