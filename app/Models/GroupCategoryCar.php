<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCategoryCar extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'category_car_id',
        'model_car_id',
        'body_type_id',
    ];

    public function category_car()
    {
        return $this->belongsTo(CategoryCar::class, 'category_car_id', 'id');
    }

    public function model_car()
    {
        return $this->belongsTo(Marka::class, 'model_car_id', 'id');
    }

    public function body_type_car()
    {
        return $this->belongsTo(BodyType::class, 'body_type_id', 'id');
    }
}
