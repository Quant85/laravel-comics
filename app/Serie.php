<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
