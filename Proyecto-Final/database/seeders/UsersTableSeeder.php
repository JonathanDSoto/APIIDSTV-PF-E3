<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Victor',
            'last_name' => 'Meza',
            'email' => 'correo@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel'=> 'Hotel A'
        ]);

        User::create([
            'name' => 'Victor',
            'last_name' => 'Meza',
            'email' => 'correo1@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel'=> 'Hotel B'
        ]);
    }
}
