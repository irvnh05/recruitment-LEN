<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Lowongan extends Model
{
    // use SoftDeletes;

    protected $fillable = [
        'posisi', 'gaji', 'deksripsi','kriteria_penting','tgl_awal','tgl_akhir','programs_id'
    ];

    protected $hidden = [
        
    ];

    public function program()
        {
            return $this->belongsTo(Program::class,'programs_id','id')->withTrashed();
        }


}
