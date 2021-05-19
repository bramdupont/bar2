<?php

namespace Database\Seeders;

use App\Models\Drank;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DrankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drank::create(
            [
            'name' => 'Cristal',
            'price' => 0.4,
            'color' => '#1EE592'
            ]);
        Drank::create([
                'name' => 'Kaiser',
                'price' => 0.2,
                'color' => '#963EFF'
            ]);
        Drank::create([
                'name' => 'Rodeo',
                'price' => 0.5,
                'color' => '#FF0052'
            ]);
        Drank::create([
                'name' => 'Kriek',
                'price' => 0.6,
                'color' => '#0073FF'
            ]);

        foreach (Drank::all() as $drank) {
            $users = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            foreach($users as $user){
                $drank->user()->attach($users, ['amount' => rand(0,99)]);
            }
        }
    }
}
