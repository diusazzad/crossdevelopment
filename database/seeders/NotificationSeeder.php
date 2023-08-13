<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'User')->first()->id)->first();

        Notification::factory()->create([
            'message' => 'New course available!',
            'user_id' => $user->id,
        ]);

        // Add more notification records with different users as needed
    }
}
