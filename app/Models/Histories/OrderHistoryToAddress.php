<?php

namespace App\Models\Histories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistoryToAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_to_address_id',
        'order_history_id',
        'search_address_id',
    ];

    public function search_addresses()
    {
        return $this->belongsTo(SearchAddress::class, 'search_address_id', 'id')->with(['address', 'fast_address']);
    }

    public function orderToAddress()
    {
        return $this->belongsTo(OrderToAddress::class);
    }
}
