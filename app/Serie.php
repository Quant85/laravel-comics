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
    'slug',
    'created_at',
    'update_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
