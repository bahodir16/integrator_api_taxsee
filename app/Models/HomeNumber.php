<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeNumber extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'is_active',
    ];
}
