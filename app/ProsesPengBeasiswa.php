<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsesPengBeasiswa extends Model
{
    protected $fillable = [
        'Lembaga', 'Tempat'
    ];

    protected $hidden = [
        
    ];

}