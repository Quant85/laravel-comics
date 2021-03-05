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
    'sale_date',
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

    public function size()
    {
        return $this->belongsTo(Size::class)->withDefault([
            'size' => '6 5/8 x 10 3/16'
        ]);
    }

    public function talents()
    {
        return $this->belongsToMany(Talent::class);
    }
}
