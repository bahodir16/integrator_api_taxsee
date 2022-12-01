<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformerTransportOption extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'performer_transport_id',
        'option_id',
        'is_check',
    ];

    public function transport()
    {
        return $this->belongsTo(PerformerTransport::class, 'performer_transport_id', 'id');
    }

    public function car_option()
    {
        return $this->belongsTo(CarOption::class, 'option_id', 'id');
    }
}
