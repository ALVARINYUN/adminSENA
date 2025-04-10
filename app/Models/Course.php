<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function training_center(){
        return $this->belongsTo(Training_Center::class);
    }
    public function Teachers(){
        return $this->belongsToMany(Teacher::class);
    }
}
