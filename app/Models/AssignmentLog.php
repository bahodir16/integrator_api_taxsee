<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentLog extends Model
{
    const ASSINGMENT = 6;

    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'assignment_logs';

    protected $fillable = [
        'order_id',
        'status_id',
        'performer_id',
        'weight',
        'distance',
        'rating',
        'order_commission',
        'driver_balance',
        'id',
        'lat',
        'lng',
    ];
}
