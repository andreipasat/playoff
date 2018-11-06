<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{

    public function player() {
        return $this->belongsTo('App\Players');
    }

}
