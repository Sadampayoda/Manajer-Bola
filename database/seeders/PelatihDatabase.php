<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelatih;
use App\Models\Taktik;

class PelatihDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelatih::create([
            'nama' => 'Pep guardiola',
            'slug' => 'Pep-guardiola',
            'nasional' => 'Spanyol',
            'value' => '120'
        ]);

        

        

        Pelatih::create([
            'nama' => 'Diego Simeone',
            'slug' => 'Diego-Simeone',
            'nasional' => 'Spanyol',
            'value' => '170'
        ]);
       


        Pelatih::create([
            'nama' => 'Jurgen Klopp',
            'slug' => 'Jurgen-Klopp',
            'nasional' => 'Germany',
            'value' => '120'
        ]);
        

        Pelatih::create([
            'nama' => 'Roberto Mancini',
            'slug' => 'Roberto-Mancini',
            'nasional' => 'Itali',
            'value' => '100'
        ]);
        

        Pelatih::create([
            'nama' => 'Thomas Tuchel',
            'slug' => 'Thomas-Tuchel',
            'nasional' => 'Germany',
            'value' => '90'
        ]);

       
        
    }
}
