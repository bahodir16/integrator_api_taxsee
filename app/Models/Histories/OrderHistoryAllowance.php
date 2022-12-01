<?php

namespace App\Models\Histories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistoryAllowance extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_allowance_id',
        'order_history_id',
        'allowance_id',
    ];

    public function allowance()
    {
        return $this->belongsTo(Allowance::class, 'allowance_id', 'id');
    }

    public function order_allowance()
    {
        return $this->belongsTo(OrderAllowance::class);
    }
}
