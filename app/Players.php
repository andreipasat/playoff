<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{

    public function club() {
        return $this->belongsTo('App\Clubs');
    }

}
