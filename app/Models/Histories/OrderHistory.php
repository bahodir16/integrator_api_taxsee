<?php

namespace App\Models\Histories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'client_id',
        'create_user_id',
        'division_id',
        'dop_phone',
        'auto_assignment',
        'not_issued',
        'for_time',
        'date_time',
        'search_address_id',
        'to_addresses',
        'allowances',
        'distance',
        'meeting_info',
        'comment',
        'supervisor_comment',
        'tariff_id',
        'order_type_id',
        'price',
        'info_price',
        'number_of_passengers',
        'date_start',
        'date_end',
    ];
}
