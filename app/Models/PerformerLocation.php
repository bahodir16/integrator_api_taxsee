<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformerLocation extends Model
{
    use HasFactory;

    protected $table = 'performer_locations';

    protected $fillable = [
        'id',
        'performer_id',
        'longitude',
        'latitude',
    ];

    protected $connection = 'mysql_performer';

    protected $primaryKey = 'performer_id';
}
