<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExceptionModelCar extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'tariff_class_car_id',
        'model_car_id',
        'status',
    ];

    public function tariff_class_car()
    {
        return $this->belongsTo(TariffClassCar::class, 'tariff_class_car_id', 'id');
    }

    public function model_car()
    {
        return $this->belongsTo(Marka::class, 'model_car_id', 'id');
    }
}
