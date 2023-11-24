<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel A',
            'address' => 'Dirección del Hotel A',
            'description' => 'Descripción del Hotel A',
        ]);

        Hotel::create([
            'name' => 'Hotel B',
            'address' => 'Dirección del Hotel B',
            'description' => 'Descripción del Hotel B',
        ]);

    }
}