<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soal extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'users_id',
    'deksripsi',
    'waktu',
    'kkm',
    'tampil'
    ];

    protected $hidden = [
        
    ];
    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }
}
