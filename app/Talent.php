<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    //

    protected $table = 'talents';
    protected $fillable = [
    'id',
    'name',
    'bio',
    'img',
    'slug'
    ] ;
    public function credits()
    {
        # code...
        return $this->belongsToMany(Credit::class, 'talent_credit');
    }

    public function products()
    {
        # code...
        return $this->belongsToMany(Product::class);
    }
}
