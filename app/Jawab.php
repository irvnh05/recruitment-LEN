<?php

namespace App;

// use App\Jawab;
use Illuminate\Database\Eloquent\Model;

class Jawab extends Model
{

    protected $fillable = [
      'no_soal_id',
      'soals_id',
      'users_id',
      'nama',
      'pilihan',
      'score',
      'status',
      'revisi'
    ];

    protected $hidden = [
        
    ];

    public function user(){
        return $this->belongsTo( User::class, 'users_id');
    }

    public function detailSoal()
    {
    return $this->belongsTo( DetailSoal::class, 'no_soal_id');
    }
}
