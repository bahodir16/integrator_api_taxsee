<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCondition extends Model
{
    protected $connection = 'mysql_performer';

    public $table = 'car_conditions';

    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
