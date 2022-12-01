<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingPoint extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'fast_address_id',
        'name',
        'group',
        'is_active',
    ];
}
