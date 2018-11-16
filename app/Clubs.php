<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    public function country() {
        return $this->belongsTo('App\Countries');
    }
}
