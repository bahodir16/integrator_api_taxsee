<?php

namespace App\Models;

class TypeTariffAllowance extends BasicModel
{
    protected $fillable = [
        'type_tariff_id',
        'allowance_id',
        'sort',
    ];

    public function allowance()
    {
        return $this->belongsTo(Allowance::class, 'allowance_id', 'id');
    }
}
