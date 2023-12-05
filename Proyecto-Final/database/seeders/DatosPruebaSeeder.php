<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\User;

class DatosPruebaSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel A',
            'address' => 'Dirección del Hotel A',
            'description' => 'Descripción del Hotel A',
            'image'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fes.visitorlando.com%2Falojamiento%2Ftodos-los-hoteles-y-resorts%2F&psig=AOvVaw1w2-V6dlomhgeDK-n8KqNN&ust=1701386697453000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCJD1icGt6oIDFQAAAAAdAAAAABAD',
        ]);

        Hotel::create([
            'name' => 'Hotel B',
            'address' => 'Dirección del Hotel B',
            'description' => 'Descripción del Hotel B',
            'image'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fes.visitorlando.com%2Falojamiento%2Ftodos-los-hoteles-y-resorts%2F&psig=AOvVaw1w2-V6dlomhgeDK-n8KqNN&ust=1701386697453000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCJD1icGt6oIDFQAAAAAdAAAAABAD',
        ]);

        User::create([
            'name' => 'Victor',
            'last_name' => 'Meza',
            'email' => 'correo@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel'=> 'Hotel A'
        ]);

        User::create([
            'name' => 'Josue',
            'last_name' => 'Jacinto',
            'email' => 'correo2@prueba.com',
            'password' => bcrypt('123456789'),
            'name_hotel'=> 'Hotel B'
        ]);
    }
}
