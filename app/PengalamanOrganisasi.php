<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{

    protected $fillable = [
        'Jabatan', 'Nama_Organisasi','biodatas_id'
    ];

    protected $hidden = [
        
    ];
    
    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id', 'id');
    }
}