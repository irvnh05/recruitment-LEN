<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsoals', function (Blueprint $table) {
            $table->id();
            $table->longText('pertanyaan');
            $table->longText('pila');
            $table->longText('pilb');
            $table->longText('pilc');
            $table->longText('pild')->nullable();
            $table->longText('pile')->nullable();
            $table->string('kunci', 1);
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
        Schema::dropIfExists('detailsoals');
    }
}
