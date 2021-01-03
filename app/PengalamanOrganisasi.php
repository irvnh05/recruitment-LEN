<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{

    protected $fillable = [
        'Jabatan', 'Nama_Organisasi'
    ];

    protected $hidden = [
        
    ];

}