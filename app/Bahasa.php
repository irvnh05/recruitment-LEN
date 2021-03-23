<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{

    protected $fillable = [
        'Bahasa', 'Lisan', 'Tulisan','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}