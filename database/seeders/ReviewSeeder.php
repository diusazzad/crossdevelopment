<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'User')->first()->id)->first();

        Review::factory()->create([
            'content' => 'This course is amazing!',
            'user_id' => $user->id,
        ]);

    }
}
