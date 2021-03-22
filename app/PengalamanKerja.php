<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{

    protected $fillable = [
        'Nama_Perusahaan', 'Tahun', 'Tugas_TJU', 'Gaji', 'Alasan_Berhenti','users_id','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    // public function user(){
    //     return $this->belongsTo( User::class, 'users_id', 'id');
    // }
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}