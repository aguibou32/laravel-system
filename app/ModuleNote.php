<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuleNote extends Model
{
    //

    public function module(){
        $this->belongsTo(Module::class);
    }
}
