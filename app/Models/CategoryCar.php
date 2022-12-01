<?php

namespace App\Models;

use App\Models\Car\ClassCar;

class CategoryCar extends BasicModel
{
    protected $connection = 'mysql_performer';

    public $table = 'category_cars';

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    public function model_cars()
    {
        return $this->hasMany(Marka::class, 'category_car_id', 'id');
    }

    public function car_options()
    {
        return $this->hasMany(CarOption::class, 'category_car_id', 'id');
    }

    public function class_cars()
    {
        return $this->hasMany(ClassCar::class, 'category_car_id', 'id');
    }

    public function body_types()
    {
        return $this->hasMany(BodyType::class, 'category_car_id', 'id');
    }
}
