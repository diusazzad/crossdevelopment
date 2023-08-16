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
        $AdminRole = Role::where('name', 'Admin')->first();

        User::create([
            'name' => 'John Doe AdminA',
            'email' => 'johndoeA@Admiin.com',
            'password' => bcrypt('password'),
            'role_id' => $AdminRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe AdminB',
            'email' => 'janedoB@example.com',
            'password' => bcrypt('password'),
            'role_id' => $AdminRole->id,
        ]);


        $ManagerRole = Role::where('name', 'Manager')->first();

        User::create([
            'name' => 'John Doe ManagerA',
            'email' => 'johndoeA@Manager.com',
            'password' => bcrypt('password'),
            'role_id' => $ManagerRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe Manager',
            'email' => 'janedoeB@Manager.com',
            'password' => bcrypt('password'),
            'role_id' => $ManagerRole->id,
        ]);


        $CounselorRole = Role::where('name', 'Counselor')->first();

        User::create([
            'name' => 'John Doe CounselorA',
            'email' => 'johndoeA@Counselor.com',
            'password' => bcrypt('password'),
            'role_id' => $CounselorRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe CounselorB',
            'email' => 'janedoeB@Counselor.com',
            'password' => bcrypt('password'),
            'role_id' => $CounselorRole->id,
        ]);


        $MentorRole = Role::where('name', 'Mentor')->first();

        User::create([
            'name' => 'John Doe MentorA',
            'email' => 'johndoeA@Mentor.com',
            'password' => bcrypt('password'),
            'role_id' => $MentorRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe MentorB',
            'email' => 'janedoeB@Mentor.com',
            'password' => bcrypt('password'),
            'role_id' => $MentorRole->id,
        ]);


        $TeacherRole = Role::where('name', 'Teacher')->first();

        User::create([
            'name' => 'John Doe TeacherA',
            'email' => 'johndoeA@Teacher.com',
            'password' => bcrypt('password'),
            'role_id' => $MentorRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe TeacherB',
            'email' => 'janedoeB@Teacher.com',
            'password' => bcrypt('password'),
            'role_id' => $TeacherRole->id,
        ]);


        $StudentRole = Role::where('name', 'Student')->first();

        User::create([
            'name' => 'John Doe studentA',
            'email' => 'johndoeA@student.com',
            'password' => bcrypt('password'),
            'role_id' => $StudentRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe studentB',
            'email' => 'janedoeB@student.com',
            'password' => bcrypt('password'),
            'role_id' => $StudentRole->id,
        ]);



        $AdvertiserRole = Role::where('name', 'Advertiser')->first();

        User::create([
            'name' => 'John Doe AdvertiserA',
            'email' => 'johndoeA@Advertiser.com',
            'password' => bcrypt('password'),
            'role_id' => $AdvertiserRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe AdvertiserB',
            'email' => 'janedoeB@Advertiser.com',
            'password' => bcrypt('password'),
            'role_id' => $AdvertiserRole->id,
        ]);


        $VisitorRole = Role::where('name', 'Visitor')->first();

        User::create([
            'name' => 'John Doe VisitorA',
            'email' => 'johndoeA@Visitor.com',
            'password' => bcrypt('password'),
            'role_id' => $MentorRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe VisitorB',
            'email' => 'janedoeB@Visitor.com',
            'password' => bcrypt('password'),
            'role_id' => $VisitorRole->id,
        ]);


    }
}
