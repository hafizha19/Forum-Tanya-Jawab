<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    protected $table = 'komentar_jawaban';
    protected $guarded = [];

    public function jawabans(){
    	return $this->belongsTo('App\Jawaban', 'jawaban_id');
    }

    public function author(){
    	return $this->belongsTo('App\User', 'user_id');
    }

   
}
