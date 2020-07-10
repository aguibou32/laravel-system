<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    protected $guarded = [];
    protected $fillable = [];

    public function user(){
        $this->morphOne('App\User', 'profile');
    }
}
