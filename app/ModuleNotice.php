<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuleNotice extends Model
{
    //

    public function module(){
        $this->belongsTo(Module::class);
    }
}
