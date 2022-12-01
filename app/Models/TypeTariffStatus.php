<?php

namespace App\Models;

class TypeTariffStatus extends BasicModel
{
    protected $fillable = [
        'type_tariff_id',
        'status_id',
        'sort',
    ];

    public function status()
    {
        return $this->belongsTo(ListTariffStatus::class, 'status_id', 'id');
    }
}
