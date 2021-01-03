<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanFormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_formals', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lembaga');
            $table->date('Tahun');
            $table->string('Jurusan');
            $table->string('Tingkat');
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
        Schema::dropIfExists('_pendidikan__formals');
    }
}
