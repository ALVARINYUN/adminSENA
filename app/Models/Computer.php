<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function aprentice(){
        return $this->hasOne(Aprentice::class);
     }
}
