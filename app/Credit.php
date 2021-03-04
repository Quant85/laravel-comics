<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //

    public function talents()
    {
        # code...
        return $this->belongsToMany(Credit::class);
    }
}
