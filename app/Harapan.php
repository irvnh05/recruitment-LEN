<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harapan extends Model
{


    protected $fillable = [
        'Harapan_Karir', 'Permintaan_Gaji', 'Minat_Posisi_Jika_Ditolak'
    ];

    protected $hidden = [
        
    ];

}