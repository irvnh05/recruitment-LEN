<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanLain extends Model
{
    protected $fillable = [
        'Nama_Lembaga', 'Jurusan', 'Tingkat', 'Tahun','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}