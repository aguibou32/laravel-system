<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    //

    public function module(){
        $this->belongsTo(Module::class);
    }
}
