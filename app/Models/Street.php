<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    const DISABLED = 0;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'street_type_id',
        'village_id',
        'synonym',
        'is_active',
    ];

    public function synonyms()
    {
        return $this->hasMany(StreetSynonym::class, 'street_id', 'id')->select('street_id', 'id', 'name', 'is_active');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'id')->with('city');
    }

    public function street_type()
    {
        return $this->belongsTo(StreetType::class, 'street_type_id', 'id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'street_id', 'id');
    }
}
