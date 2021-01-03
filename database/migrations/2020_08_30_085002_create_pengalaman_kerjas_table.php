<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Perusahaan');
            $table->date('Tahun');
            $table->string('Tugas_TJU');
            $table->integer('Gaji');
            $table->string('Alasan_Berhenti');
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
        Schema::dropIfExists('_pengalaman__kerjas');
    }
}
