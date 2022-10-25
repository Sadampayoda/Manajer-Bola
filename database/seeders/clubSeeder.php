<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::create([
            'image' => 'barcelona',
            'nama' => 'Barcelona',
            'nasional' => 'Spanyol'
        ]);
        Club::create([
            'image' => 'Real-madrid',
            'nama' => 'Real Madrid',
            'nasional' => 'Spanyol'
        ]);

    }
}
