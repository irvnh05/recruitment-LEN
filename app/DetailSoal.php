<?php

namespace App;

// use App\Models\Jawab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class DetailSoal extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'pertanyaan','pila','pilb','pilc','pild','pile','kunci','status','sesi','score','soals_id'
    ];

    protected $hidden = [
        
    ];
    public function soal(){
        return $this->belongsTo( Soal::class, 'soals_id', 'id');
    }
    	public function checkJawab()
	{
        return $this->belongsTo( Jawab::class, 'id', 'no_soal_id')->where('users_id', Auth::user()->id);
        // App\Models\Jawab
		// return $this->belongsTo( Jawab::class, 'id', 'no_soal_id');
	}
}
