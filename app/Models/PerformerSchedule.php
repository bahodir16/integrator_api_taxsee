<?php

namespace App\Models;

use SebastianBergmann\CodeCoverage\Driver\Driver;

class PerformerSchedule extends BasicModel
{
    protected $connection = 'mysql_performer';

    protected $fillable = [
        'performer_id',
        'week_day',
        'to',
        'from',
    ];

    public function performer()
    {
        return $this->belongsTo(Driver::class, 'performer_id', 'id');
    }
}
