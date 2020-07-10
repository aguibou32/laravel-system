<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $guarded = [];
    protected $fillable = [];

    public function user(){
        $this->morphOne('App\User', 'profile');
    }

    public function modules(){
        $this->belongsToMany(Module::class)->withTimeStamps();;
    }
    
}
