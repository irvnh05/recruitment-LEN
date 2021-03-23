<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harapan extends Model
{


    protected $fillable = [
        'Harapan_Karir', 'Permintaan_Gaji', 'Minat_Posisi_Jika_Ditolak','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}