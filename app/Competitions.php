<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
    protected $fillable = ['name','art_id'];

    public function art() {
        return $this->belongsTo('App\Arts');
    }

    public function rules() {
        return $this->belongsToMany('App\Rules','competition_rules','competition_id','rule_id');
    }

    public function playoffs() {
        return $this->hasMany('App\Playoff','competition_id');
    }
}
