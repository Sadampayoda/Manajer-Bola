<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\stadion;

class stadionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        stadion::create([
            'club_id' => 1,
            'nama' => 'Camp Nou',
            'Nasional' => 'Spanyol'
        ]);

        stadion::create([
            'club_id' => 2,
            'nama' => 'Santiago Berna bau',
            'Nasional' => 'Spanyol'
        ]);
    }
}
