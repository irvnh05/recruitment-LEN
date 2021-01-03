<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{

    protected $fillable = [
        'Username',
        'Nama_Lengkap',
        'Tanggal_Lahir',
        'Tempat_Lahir',
        'Jenis_Kelamin',
        'Status_Perkawinan',
        'Alamat_KTP',
        'No_KTP',
        'No_Hp',
        'Tinggi_Badan',
        'Berat_Badan',
        'Keadaan_Saat_Isi',
        'Cek_Kes_Terakhir',
        'Nama_Kel_Dekat',
        'No_Hp_Kel_Dekat',
        'foto',
        'users_id',
        'pengalaman_kerjas_id'
    ];

    protected $hidden = [
        
    ];
    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }
    public function pengalamankerja(){
        return $this->belongsToMany( PengalamanKerja::class, 'pengalaman_kerjas_id', 'id');
    }


}