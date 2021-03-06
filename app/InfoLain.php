<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfoLain extends Model
{

    protected $fillable = [
        'Melamar_Melalui', 'Diperkenalkan_Oleh', 'Kegiatan_Lain', 'Hobi','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}