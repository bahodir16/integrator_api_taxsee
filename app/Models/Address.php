<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    const DISABLED = 0;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'street_id',
        'district_id',
        'home_type_id',
        'lng',
        'lat',
        'village_id',
        'is_active',
    ];

    public function synonyms()
    {
        return $this->hasMany(AddressSynonym::class, 'address_id', 'id');
    }

    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function home_type()
    {
        return $this->belongsTo(HomeType::class, 'home_type_id', 'id');
    }
}
