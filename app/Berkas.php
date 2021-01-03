<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{

    protected $fillable = [
         'lowongans_id','biodatas_id', 'status'
    ];

    protected $hidden = [

    ];

    // public function details(){
    //     return $this->hasMany( TransactionDetail::class, 'transactions_id', 'id' );
    // }

    public function lowongan(){
        return $this->hasOne( Lowongan::class, 'id' , 'lowongans_id');
    }

    public function biodata(){
        return $this->belongsTo( Biodata::class, 'biodatas_id','id' );
    }

}
