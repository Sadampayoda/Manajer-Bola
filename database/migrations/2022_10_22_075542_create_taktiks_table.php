<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taktiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelatih_id');
            $table->foreignId('DetilTaktik_id');
            $table->enum('taktik',[
                'Counter Attack',
                'Tiki Taka',
                'Jogo Bonito',
                'Total Football',
                'Kick and Rush',
                'Verrou'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taktiks');
    }
};
