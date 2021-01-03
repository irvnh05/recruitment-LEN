<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{

    protected $fillable = [
        'Nama_Lampiran','Lampiran','Nama_Institusi'
    ];

    protected $hidden = [
        
    ];

}