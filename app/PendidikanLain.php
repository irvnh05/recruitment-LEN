<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanLain extends Model
{
    protected $fillable = [
        'Nama_Lembaga', 'Jurusan', 'Tingkat', 'Tahun'
    ];

    protected $hidden = [
        
    ];

}