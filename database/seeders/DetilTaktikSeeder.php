<?php

namespace Database\Seeders;

use App\Models\DetilTaktik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetilTaktikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DetilTaktik::create([
            'image' => '2-3-5.jpg',
            'formasi' => '2-3-5'
        ]);
        DetilTaktik::create([
            'image' => '4-2-4.jpg',
            'formasi' => '4-2-4'
        ]);

        DetilTaktik::create([
            'image' => '4-3-3.jpg',
            'formasi' => '4-3-3'
        ]);
        DetilTaktik::create([
            'image' => '3-5-2.jpg',
            'formasi' => '3-5-2'
        ]);
        DetilTaktik::create([
            'image' => '4-2-3-1.jpg',
            'formasi' => '4-2-3-1'
        ]);
        DetilTaktik::create([
            'image' => '0-5-5.jpg',
            'formasi' => '0-5-5'
        ]);
        DetilTaktik::create([
            'image' => '3-4-3.jpg',
            'formasi' => '3-4-3'
        ]);   
                
    }
}
