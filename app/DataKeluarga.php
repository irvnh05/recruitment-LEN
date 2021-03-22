<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{

    protected $fillable = [
        'Nama_Lengkap', 'TTL', 'Hubungan', 'PekerjaanSekolah','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}