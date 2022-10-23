<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Taktik;

class TaktikDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taktik::create([
            'pelatih_id' => 1,
            'DetilTaktik_id' => 3,
            'taktik' => 'Tiki Taka'
        ]);

        Taktik::create([
            'pelatih_id' => 1,
            'DetilTaktik_id' => 5,
            'taktik' => 'Total Football'
        ]);

        Taktik::create([
            'pelatih_id' => 1,
            'DetilTaktik_id' => 4,
            'taktik' => 'Tiki Taka'
        ]);

        Taktik::create([
            'pelatih_id' => 2,
            'DetilTaktik_id' => 7,
            'taktik' => 'Counter Attack'
        ]);

        Taktik::create([
            'pelatih_id' => 3,
            'DetilTaktik_id' => 3,
            'taktik' => 'Kick and Rush'
        ]);
        Taktik::create([
            'pelatih_id' => 3,
            'DetilTaktik_id' => 5,
            'taktik' => 'Total Football'
        ]);

        Taktik::create([
            'pelatih_id' => 4,
            'DetilTaktik_id' => 3,
            'taktik' => 'Total Football'
        ]);
        Taktik::create([
            'pelatih_id' => 4,
            'DetilTaktik_id' => 4,
            'taktik' => 'Total Football'
        ]);

        Taktik::create([
            'pelatih_id' => 5,
            'DetilTaktik_id' => 7,
            'taktik' => 'Jogo Bonito'
        ]);
        Taktik::create([
            'pelatih_id' => 5,
            'DetilTaktik_id' => 3 ,
            'taktik' => 'Total Football'
        ]);
    }
}
