<?php

namespace App\Models;

class TariffStatus extends BasicModel
{
    protected $fillable = [
        'tariff_id',
        'status_id',
        'status',
    ];

    public function tariff()
    {
        return $this->belongsTo(Tariff::class, 'tariff_id', 'id');
    }

    public function statuses()
    {
        return $this->belongsTo(ListTariffStatus::class, 'status_id', 'id');
    }
}
