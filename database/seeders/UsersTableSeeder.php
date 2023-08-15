<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
        ]);

        $studentRole = Role::where('name', 'Student')->first();

        User::create([
            'name' => 'John Doe student',
            'email' => 'johndoe@student.com',
            'password' => bcrypt('password'),
            'role_id' => $studentRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe student',
            'email' => 'janedoe@student.com',
            'password' => bcrypt('password'),
            'role_id' => $studentRole->id,
        ]);


    }
}
