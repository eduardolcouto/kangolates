<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    public function trainings(){
        return $this->belongsToMany(Training::class);
    }

    public function scores(){
        return $this->belongsTo(Score::class);
    }
}
