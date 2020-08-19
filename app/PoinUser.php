<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoinUser extends Model
{
    protected $table = 'poin_user';
    protected $guarded = [];

    public function pertanyaan()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
