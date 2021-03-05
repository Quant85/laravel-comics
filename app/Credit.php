<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //

    public function talent()
    {
        # code...
        return $this->belongsToMany(Talent::class, 'talent_credit');
    }
}
