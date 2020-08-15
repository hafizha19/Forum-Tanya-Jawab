<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $guarded = [];

    public function pertanyaan(){
    	return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }

    public function author(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    
    public function komentarjawabans()
    {
        return $this->hasMany('App\KomentarJawaban');
    }
}
