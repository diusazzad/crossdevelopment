<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'Mentor')->first()->id)->first();

        $product = new Product([
            'title' => 'Laptop',
            'description' => 'High-performance laptop',
            'category' => 'Electronics',
            'price' => 999.99,
            'mentor_id' => 1, // Replace with an actual mentor ID
        ]);


    }
}
