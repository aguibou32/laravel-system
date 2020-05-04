<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //

    protected $guarded = [];

    public function lecturer(){
        
        return $this->hasOne(Lecturer::class);
    }

    public function practical(){
        return $this->hasMany(Practical:: class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function notes(){
        return $this->hasMany(ModuleNote::class);
    }

    public function notices(){
        return $this->hasMany(ModuleNotice::class);
    }
}
