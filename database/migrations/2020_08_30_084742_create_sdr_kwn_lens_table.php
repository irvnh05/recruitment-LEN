<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdrKwnLensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdr_kwn_lens', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->string('Hubungan');
            $table->string('Bagian');
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
        Schema::dropIfExists('_sdr__kwn__lens');
    }
}
