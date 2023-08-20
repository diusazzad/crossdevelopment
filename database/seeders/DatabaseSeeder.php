<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UsersTableSeeder::class,
            UserProfileSeeder::class,
            UserDeviceInfoSeeder::class,
            UserFullInfoSeeder::class,
        ]);
    }
}
