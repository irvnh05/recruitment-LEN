<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harapans', function (Blueprint $table) {
            $table->id();
            $table->string('Harapan_Karir');
            $table->integer('Permintaan_Gaji');
            $table->string('Minat_Posisi_Jika_Ditolak');
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
        Schema::dropIfExists('_harapans');
    }
}
