<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'zone_id',
        'population',
        'polygon',
        'color',
        'is_active',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id', 'id')->with('village');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'district_id', 'id');
    }
}
