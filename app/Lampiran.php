<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{

    protected $fillable = [
        'Nama_Lampiran','Lampiran','Nama_Institusi','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}