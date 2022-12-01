<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOption extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    public const CONDICIONER = 1;

    protected $fillable = [
        'category_car_id',
        'name',
        'allowance-id',
        'is_active',
    ];

    public function category_car()
    {
        return $this->belongsTo(CategoryCar::class, 'category_car_id', 'id');
    }

    public function allowance()
    {
        return $this->belongsTo(Allowance::class, 'allowance_id', 'id');
    }
}
