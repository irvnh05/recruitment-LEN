<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->integer('gaji');
            $table->string('deksripsi');
            $table->string('kriteria_penting');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            // $table->int('usesr_id');
            $table->integer('programs_id');
            $table->softDeletes();
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
        Schema::dropIfExists('lowongans');
    }
}
