<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];
}