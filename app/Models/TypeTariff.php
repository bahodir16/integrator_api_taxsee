<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeTariff extends BasicModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function allowances()
    {
        return $this->hasMany(TypeTariffAllowance::class, 'type_tariff_id', 'id')->with('allowance')->orderBy('sort');
    }
    // public function statuses(){
    //     return $this->hasMany(TypeTariffStatus::class,'type_tariff_id','id')->with("status")->orderBy('sort');
    // }
}
