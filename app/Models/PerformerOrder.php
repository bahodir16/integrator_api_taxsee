<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerformerOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'performer_id',
        'order_id',
        'status_id',
        'filing_time',
    ];

    public function driver()
    {
        return $this->belongsTo(Performer::class, 'performer_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
