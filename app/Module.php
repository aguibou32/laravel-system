<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //

    protected $guarded = [];

    public function students(){
        return $this->BelongsToMany(Student::class)->withTimeStamps();
    }

    public function lecturer(){        
        return $this->hasOne(Lecturer::class);
    }

    public function practical(){
        return $this->hasMany(Practical:: class);
    }

    public function notes(){
        return $this->hasMany(ModuleNote::class);
    }

    public function notices(){
        return $this->hasMany(ModuleNotice::class);
    }
}
