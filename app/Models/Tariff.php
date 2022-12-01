<?php

namespace App\Models;

class Tariff extends BasicModel
{
    public const ACTIVE = 1;

    public const DELETE = 0;

    protected $fillable = [
        'name',
        'division_id',
        //'calc_type_id',
        'type_tariff_id',
        'sort',
        'is_active',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    // public function calc_type(){
    //     return $this->belongsTo(CalcType::class,'calc_type_id','id');
    // }
    public function prices()
    {
        return $this->belongsTo(PriceTariff::class, 'id', 'tariff_id')->where('is_active', PriceTariff::ACTIVE);
    }

    public function allowances()
    {
        return $this->hasMany(TariffAllowance::class, 'tariff_id', 'id')->where('is_active', TariffAllowance::ACTIVE);
    }
    // public function statuses(){
    //     return $this->hasMany(TariffStatus::class,'tariff_id','id');
    // }
}
