<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'Pertanyaan';

    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
