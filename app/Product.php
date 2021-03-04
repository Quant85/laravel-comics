<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    'title',
    'volume',
    'cover',
    'gallery',
    'description',
    'page_count',
    'price',
    'slug',
    'sold',
    'available',
    'category_id',
    'serie_id',
    'created_at'
    ] ;
    
    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo('App\Category')->withDefault([
            'type' => 'N/a'
        ]);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class)->withDefault([
            'name' => 'N/a'
        ]);
    }

    public function rated()
    {
        return $this->belongsTo(Rated::class)->withDefault([
            'name' => 'N/a'
        ]);
    }

    public function talents()
    {
        # code...
        return $this->belongsToMany(Talent::class);
    }
}
