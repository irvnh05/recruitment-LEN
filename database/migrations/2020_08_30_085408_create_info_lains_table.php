<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_lains', function (Blueprint $table) {
            $table->id();
            $table->string('Melamar_Melalui');
            $table->string('Diperkenalkan_Oleh');
            $table->string('Kegiatan_Lain');
            $table->string('Hobi');
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
        Schema::dropIfExists('_info__lains');
    }
}
