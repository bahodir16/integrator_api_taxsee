<?php

namespace App\Models;

use App\Models\Car\ClassCar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    public $table = 'model_cars';

    protected $fillable = [
        'name',
        'car_model',
        'car_seat_from',
        'car_seat_before',
        'car_brand_id',
        'category_car_id',
        'class_car_id',
        'is_active',
    ];

    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id', 'id');
    }

    public function category_car()
    {
        return $this->belongsTo(CategoryCar::class, 'category_car_id', 'id');
    }

    public function class_car()
    {
        return $this->belongsTo(ClassCar::class, 'class_car_id', 'id');
    }
}
