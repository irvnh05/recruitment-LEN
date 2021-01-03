<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->date('TTL');
            $table->string('Hubungan');
            $table->string('PekerjaanSekolah');
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
        Schema::dropIfExists('_data__keluargas');
    }
}
