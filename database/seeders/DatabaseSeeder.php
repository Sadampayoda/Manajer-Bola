<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pelatih;
use Illuminate\Database\Seeder;
use App\Models\Pemain;
use App\Models\Statistik;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Statistik::create([
            'tekel' => 60,
            'passing' => 98,
            'shooting' => 80,
            'speed' => 80,
            'dribling' => 99 
        ]);
        Statistik::create([
            'tekel' => 60,
            'passing' => 98,
            'shooting' => 80,
            'speed' => 80,
            'dribling' => 99 
        ]);
        Statistik::create([
            'tekel' => 60,
            'passing' => 98,
            'shooting' => 80,
            'speed' => 80,
            'dribling' => 99 
        ]);
        Statistik::create([
            'tekel' => 60,
            'passing' => 98,
            'shooting' => 80,
            'speed' => 80,
            'dribling' => 99 
        ]);

        Pemain::create([
            'statistik_id' => 1,
            'nama' => 'Leonel Messi',
            'slug' => 'Leonel-Messi',
            'gaji' => 1000000,
            'nasional' => 'argentina',
            'kondisi' => 'sehat',
            'posisi' => 'penyerang'
        ]);

        Pemain::create([
            'statistik_id' => 2,
            'nama' => 'Ter stegen',
            'slug' => 'Ter-stegen',
            'gaji' => 100000,
            'nasional' => 'germany',
            'kondisi' => 'sehat',
            'posisi' => 'kiper'
        ]);

        Pemain::create([
            'statistik_id' => 3,
            'nama' => 'frenki de jong',
            'slug' => 'frenki-de-jong',
            'gaji' => 200000,
            'nasional' => 'belanda',
            'kondisi' => 'sehat',
            'posisi' => 'gelandang'
        ]);

        Pemain::create([
            'statistik_id' => 4,
            'nama' => 'Cristiano Ronaldo',
            'slug' => 'Cristiano-Ronaldo',
            'gaji' => 900000,
            'nasional' => 'portugal',
            'kondisi' => 'sehat',
            'posisi' => 'penyerang'
        ]);

        // Pelatih dan taktik

        
        
    }

}
