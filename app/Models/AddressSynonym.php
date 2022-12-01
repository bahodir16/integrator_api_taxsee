<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressSynonym extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'address_id',
        'name',
    ];
}
