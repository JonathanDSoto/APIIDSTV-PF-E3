<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Rates;
use App\Models\Room;

class DatosPruebaSeeder extends Seeder {
    public function run() {
        Hotel::create([
            'name' => 'Hotel A',
            'address' => 'Dirección del Hotel A',
            'description' => 'Descripción del Hotel A',
            'image' => 'https://www.momondo.mx/himg/62/c0/84/ice-85676218-68620422_3XL-430714.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel B',
            'address' => 'Dirección del Hotel B',
            'description' => 'Descripción del Hotel B',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/1a/ea/54/hotel-presidente-4s.jpg',
        ]);

        User::create([
            'name' => 'Victor',
            'last_name' => 'Meza',
            'email' => 'correo@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel' => 'Hotel A'
        ]);

        User::create([
            'name' => 'Josue',
            'last_name' => 'Jacinto',
            'email' => 'correo2@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel' => 'Hotel B'
        ]);

    }
}


