<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function workouts(){
        return $this->hasMany(Workout::class);
    }

    public function schedules(){
        return $this->belongsTo(Schedule::class);
    }
}
