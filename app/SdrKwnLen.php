<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdrKwnLen extends Model
{


    protected $fillable = [
        'Nama_Lengkap', 'Hubungan', 'Bagian'
    ];

    protected $hidden = [
        
    ];

}