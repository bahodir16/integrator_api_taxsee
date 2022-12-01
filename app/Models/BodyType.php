<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = ['category_car_id', 'name', 'is_active'];

    public function category_car()
    {
        return $this->belongsTo(CategoryCar::class, 'category_car_id', 'id');
    }
}
