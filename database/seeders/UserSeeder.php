<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bram Dupont',
            'email' => 'bram@dupontwebdesign.com',
            'role' => 'admin',
            'saldo' => 23.55,
            'totaal' => 123.55,
            'password' => Hash::make('Password!123')
        ]);
        User::create([
            'name' => 'Test',
            'email' => 'test@test.be',
            'role' => 'admin',
            'saldo' => 93.55,
            'totaal' => 215.55,
            'password' => Hash::make('@dmin123')
        ]);
    }
}
