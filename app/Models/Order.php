<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends BasicModel
{
    use HasFactory;

    const ACTIVE_STATUSES = [2, 4, 7];

    const CANCELLATION = 10;

    const COMPLETE = 9;

    const DRIVER_ASSINGMENT = 2;

    const RECEVIED = 1;  // поступила

    const ORDER_END_TIME_ADD = 15;

    const ASSIGNMENT = 2;

    const DRIVER_ON_SITE = 4;

    const PERFORMING = 7;

    const NOT_ISSUED = 11;

    const HOVER_24_COMPLETE = 14;

    const CLIENT_ANSWERED = 5;

    const CLIENT_NO_ANSWER = 6;

    const OPERATOR_ID = 2;

    const OPERATOR = 'operator';

    const MANAGER_ID = 3;

    protected $fillable = [
        'client_id',
        'division_id',
        'not_issued',
        'for_time',
        'search_address_id',
        'distance',
        'supervisor_comment',
        'tariff_id',
        'order_type_id',
        'price',
        'price_tariff_id',
        'end_time',
    ];

    public function to_addresses()
    {
        return $this->hasMany(OrderToAddress::class, 'order_id', 'id')->with(['search_addresses']);
    }

    public function order_allowances()
    {
        return $this->hasMany(OrderAllowance::class, 'order_id', 'id')->with(['allowance']);
    }

    public function from_address()
    {
        return $this->belongsTo(SearchAddress::class, 'search_address_id', 'id')->with(['address', 'fast_address']);
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class, 'tariff_id', 'id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(OrderType::class, 'order_type_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'status_id', 'id');
    }

    public function performer()
    {
        return $this->hasOne(PerformerOrder::class, 'order_id', 'id')->with('driver');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'create_user_id', 'id');
    }

    public function allowances()
    {
        return $this->hasMany(OrderAllowance::class, 'order_id', 'id')->with('allowance');
    }
}
