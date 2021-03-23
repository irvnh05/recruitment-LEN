<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proses_Sel_Prsh_Lain extends Model
{

    protected $fillable = [
        'Perusahaan', 'Posisi','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}