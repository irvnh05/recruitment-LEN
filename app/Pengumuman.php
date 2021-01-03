<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengumuman extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul', 'deksripsi', 'kategori', 'photos'
    ];

    protected $hidden = [
        
    ];

}
