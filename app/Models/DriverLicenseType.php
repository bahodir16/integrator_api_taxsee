<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverLicenseType extends Model
{
    use HasFactory;

    public const TJ = 1;

    public const RU = 2;

    public const RU_2 = 3;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'name',
        'country_id',
        'regex_dalidation',
        'is_active',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'city_id', 'id');
    }
}
