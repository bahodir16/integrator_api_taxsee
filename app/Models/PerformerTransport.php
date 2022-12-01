<?php

namespace App\Models;

class PerformerTransport extends BasicModel
{
    protected $connection = 'mysql_performer';

    public $table = 'performer_transports';

    public const ACTIVE_CONNECTION = 1;

    public const WAITING_CONNECTION = 2;

    public const DELETED = 3;

    public const ACTIVE = 1;

    public const CARGO = 3;

    protected $fillable = [
        'division_id',
        'performer_id',
        'car_model_id',
        'body_type_id',
        'condition_id',
        'color_id',
        'year_of_issue',
        'count_seat',
        'car_number',
        'connected_id',
        'performer_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function model_car()
    {
        return $this->belongsTo(Marka::class, 'car_model_id', 'id');
    }

    public function body_type()
    {
        return $this->belongsTo(BodyType::class, 'body_type_id', 'id');
    }

    public function color()
    {
        return $this->belongsTo(ColorCar::class, 'color_id', 'id');
    }

    public function condition()
    {
        return $this->belongsTo(CarCondition::class, 'condition_id', 'id');
    }

    public function car_connection()
    {
        return $this->belongsTo(CarConnected::class, 'connected_id', 'id');
    }

    public function car_drivers()
    {
        return $this->belongsToMany(Performer::class, DriverCar::class, 'car_id', 'driver_id');
    }

    public function licensor()
    {
        return $this->belongsTo(Licensor::class, 'licensor_id', 'id');
    }

    public function created_user()
    {
        return $this->belongsTo(User::class, 'created_user_id', 'id');
    }

    public function updated_user()
    {
        return $this->belongsTo(User::class, 'updated_user_id', 'id');
    }

    public function car_options()
    {
        return $this->belongsToMany(CarOption::class, PerformerTransportOption::class, 'performer_transport_id', 'option_id');
    }
}
