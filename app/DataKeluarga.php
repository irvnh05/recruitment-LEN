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

}