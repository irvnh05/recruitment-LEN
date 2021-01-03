<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('Username')->default('-');
            $table->string('Nama_Lengkap')->default('-');
            $table->string('Tanggal_Lahir')->default('-');
            $table->string('Tempat_Lahir')->default('-');
            $table->string('Jenis_Kelamin')->default('-');
            $table->string('Status_Perkawinan')->default('-');
            $table->string('Alamat_KTP')->default('-');
            $table->string('No_KTP')->default('-');
            $table->string('No_Hp')->default('-');
            $table->string('Alamat_Email')->default('-');
            $table->string('Tinggi_Badan')->default('-');
            $table->string('Berat_Badan')->default('-');
            $table->string('Keadaan_Saat_Isi')->default('-');
            $table->string('Cek_Kes_Terakhir')->default('-');
            $table->string('Nama_Kel_Dekat')->default('-');
            $table->string('No_Hp_Kel_Dekat')->default('-');
            $table->string('foto')->default('-');
            $table->integer('users_id')->default('0');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
