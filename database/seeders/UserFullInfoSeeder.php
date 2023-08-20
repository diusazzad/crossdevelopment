<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User\UserFullInfo;
use App\Models\User\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserFullInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user IDs
        $userIds = User::pluck('id');

        foreach ($userIds as $userId) {
            // Fetch user profile related data
            $userProfile = UserProfile::where('user_id', $userId)->first();

            if ($userProfile) {
                UserFullInfo::create([
                    'user_id' => $userId,
                    'location' => $userProfile->location,
                    'website' => $userProfile->website,
                    'gender' => $userProfile->gender,
                    'phone' => $userProfile->phone,
                    'interests' => $userProfile->interests,
                    'occupation' => $userProfile->occupation,
                    'about' => $userProfile->bio,
                    // Assuming 'bio' from user_profiles as 'about'
                    'education' => null,
                    'language' => null,
                    'skills' => null,
                    'social_links' => null,
                    'hobbies' => null,
                    'family_status' => null,
                    'relationship_status' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
