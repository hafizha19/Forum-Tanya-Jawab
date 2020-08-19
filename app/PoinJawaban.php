<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoinJawaban extends Model
{
    protected $table = 'like_dislike_jawaban';
    protected $guarded = [];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Jawaban', 'jawaban_id');
    }
}
