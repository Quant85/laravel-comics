<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //
    protected $fillable = [
    'name',
    'cover',
    'description',
    'total_vol',
    'slug'
    ];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
