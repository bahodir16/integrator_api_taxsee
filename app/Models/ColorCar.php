<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ColorCar extends BasicModel
{
    protected $connection = 'mysql_performer';

    use HasFactory;

    public $table = 'colors';
}
