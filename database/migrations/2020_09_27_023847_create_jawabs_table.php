<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabs', function (Blueprint $table) {
            $table->id();
            $table->string('no_soal_id');
            $table->integer('soals_id');
            $table->integer('users_id');
            $table->string('nama');
            $table->string('pilihan');
            $table->string('score');
            $table->string('status');
            $table->integer('revisi');
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
        Schema::dropIfExists('jawabs');
    }
}
