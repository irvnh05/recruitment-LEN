<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsesPengBeasiswa extends Model
{
    protected $fillable = [
        'Lembaga', 'Tempat','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}