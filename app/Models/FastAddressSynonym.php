<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastAddressSynonym extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'fast_address_id',
        'name',
        'is_active',
    ];
}
