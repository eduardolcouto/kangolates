<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function schedules(){
        return $this->belongsToMany(Schedule::class);
    }

    public function workouts(){
        return $this->belongsToMany(Workout::class);
    }
}
