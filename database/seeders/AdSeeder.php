<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'Advertiser')->first()->id)->first();

        Ad::factory()->create([
            'video_url' => 'https://www.example.com/video1.mp4',
            'payment_status' => 'Pending',
            'user_id' => $user->id,
        ]);
    }
}
