<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    //

    protected $guarded = [];
    protected $fillable = [];

    public function user(){
        $this->morphOne('App\User', 'profile');
    }

    public function module(){        
        return $this->belongsTo(Module::class);
    }

}
