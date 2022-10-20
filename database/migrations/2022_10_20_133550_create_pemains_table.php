<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemains', function (Blueprint $table) {
            $table->id('id_pemain');
            $table->string('nama')->unique();
            $table->string('slug');
            $table->integer('gaji');
            $table->string('nasional');
            $table->enum('kondisi',[
                'sehat',
                'sedang',
                'sakit'
            ]);
            $table->enum('posisi',[
                'penyerang',
                'gelandang',
                'bertahan',
                'kiper'
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
        Schema::dropIfExists('pemains');
    }
};
