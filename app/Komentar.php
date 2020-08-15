<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar_pertanyaan';
    protected $guarded = [];
    

    public function pertanyaan(){
    	return $this->belongsTo('App\Pertanyaan');
    }

    public function author(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
