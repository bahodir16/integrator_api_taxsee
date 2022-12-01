<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'city_id',
        'polygon',
        'is_active',
    ];

    public function zones()
    {
        return $this->hasMany(Zone::class, 'village_id', 'id')->select('id', 'village_id', 'name', 'polygon')->with('districts');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function village_zones()
    {
        return $this->hasMany(Zone::class, 'village_id', 'id')->select('id', 'village_id', 'name', 'polygon')->with('zone_districts')->where('is_active', 1);
    }

    public function city_ru()
    {
        return $this->belongsTo(City::class, 'city_id', 'id')->select('translations->ru as name_ru');
    }
}
