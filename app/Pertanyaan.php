<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'Pertanyaans';
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function komentars()
    {
        return $this->hasMany('App\Komentar');
    }
    public function jawabans()
    {
        return $this->hasMany('App\Jawaban');
    }

}

