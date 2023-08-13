<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role_id', Role::where('name', 'User')->first()->id)->first();

        Transaction::factory()->create([
            'amount' => 50.00,
            'transaction_code' => 'ABC123',
            'user_id' => $user->id,
        ]);

        // Add more transaction records with different users as needed
    }
}
