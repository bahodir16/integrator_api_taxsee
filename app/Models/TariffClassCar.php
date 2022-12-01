<?php

namespace App\Models;

use App\Models\Car\ClassCar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TariffClassCar extends Model
{
    use HasFactory;

    public const CLASS_CARGO = 6;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'class_car_id',
        'main_class_car_id',
        'condition_id',
        'min_count_seet',
        'setting_intercity',
        'age_up_to',
        'cargo_properties',
        'additionally',
    ];

    public function class_car()
    {
        return $this->belongsTo(ClassCar::class, 'class_car_id', 'id');
    }

    public function main_class_car()
    {
        return $this->belongsTo(ClassCar::class, 'main_class_car_id', 'id');
    }

    public function condition()
    {
        return $this->belongsTo(CarCondition::class, 'condition_id', 'id');
    }

    public function exception_model_cars()
    {
        return $this->hasMany(ExceptionModelCar::class, 'tariff_class_car_id', 'id')->with(['tariff_class_car', 'model_car']);
    }
}
