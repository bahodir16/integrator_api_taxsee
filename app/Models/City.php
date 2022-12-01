<?php

namespace App\Models;

class City extends BasicModel
{
    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'country_id',
        'region_id',
        'translations',
        'country_code',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id')->select(['id', 'translations->ru as name_ru']);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id')->select(['id', 'translations->ru as name_ru']);
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'city_id', 'id')->select('id', 'city_id', 'name', 'polygon')->with(['zones']);
    }
}
