<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetSynonym extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'street_id',
        'name',
        'is_active',
    ];
}
