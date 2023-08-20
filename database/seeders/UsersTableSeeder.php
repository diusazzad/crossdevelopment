<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run(): void
    {
        // Create a sample user
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            // Use your desired password
            'role_id' => 1,
            // Default role ID
            'avatar' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
