<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    //
    protected $fillable = [
    'id',
    'name',
    'slug',
    'description'
    ] ;
    public function credits()
    {
        # code...
        return $this->belongsToMany(Talent::class);
    }
}
