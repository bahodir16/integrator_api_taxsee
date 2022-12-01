<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastAddress extends Model
{
    use HasFactory;

    const DISABLED = 0;

    const ACTIVE = 1;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'address_id',
        'lng',
        'lat',
        'street_id',
        'category_id',
        'main_entrance',
        'district_id',
        'village_id',
        'is_active',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function meeteing_points()
    {
        return $this->hasMany(MeetingPoint::class, 'fast_address_id', 'id');
    }

    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(FastAddressCategory::class, 'category_id', 'id');
    }

    public function synonyms()
    {
        return $this->hasMany(FastAddressSynonym::class, 'fast_address_id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }
}
