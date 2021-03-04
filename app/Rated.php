<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rated extends Model
{
    //
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
