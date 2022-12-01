<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTracking extends Model
{
    use HasFactory;

    protected $table = 'driver_trackings';

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'performer_id',
        'lng',
        'lat',
    ];
}
