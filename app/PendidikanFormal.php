<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanFormal extends Model
{

    protected $fillable = [
        'Nama_Lembaga', 'Tahun','Jurusan','Tingkat'
    ];

    protected $hidden = [
        
    ];

}