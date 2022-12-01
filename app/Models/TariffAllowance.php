<?php

namespace App\Models;

class TariffAllowance extends BasicModel
{
    public const ACTIVE = 1;

    public const DELETE = 0;

    protected $fillable = [
        'tariff_id',
        'allowance_id',
        'price',
        'is_active',
    ];

    public function tariff()
    {
        return $this->belongsTo(Tariff::class, 'tariff_id', 'id');
    }

    public function allowance()
    {
        return $this->belongsTo(Allowance::class, 'allowance_id', 'id');
    }
}
