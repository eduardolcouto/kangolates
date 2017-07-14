<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function training(){
        return $this->hasOne(Training::class);
    }

    public function scores(){
        return $this->hasMany(Score::class);
    }
}
