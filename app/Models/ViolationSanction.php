<?php

namespace App\Models;

use App\Models\Billing\ChargeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationSanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'additional_actions',
        'term_action',
        'min_price',
        'average_check',
        'charge_type_id',
        'dop_info',
        'is_active',
    ];

    public function charge_type()
    {
        return $this->belongsTo(ChargeType::class, 'charge_type_id', 'id');
    }
}
