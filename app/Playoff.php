<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playoff extends Model
{
    protected $fillable = ['rule_id','sex'];

    public function rule() {
        return $this->belongsTo('App\Rules');
    }

    public function competition() {
        return $this->belongsTo('App\Competitions','competition_id');
    }

    public function participants() {
        return $this->hasMany('App\Participants')->orderBy('order');
    }
}
