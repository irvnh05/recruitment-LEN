<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdrKwnLen extends Model
{


    protected $fillable = [
        'Nama_Lengkap', 'Hubungan', 'Bagian','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}