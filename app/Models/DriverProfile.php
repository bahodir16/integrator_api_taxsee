<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverProfile extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'id',
        'division_id',
        'first_name',
        'last_name',
        'patronymic',
        'driver_profile_type_id',
        'driver_profile_status_id',
        'from_time',
        'before_time',
        'phone',
        'comment',
        'cause_id',
        'user_id',
        'email',
        'gender',
        'date_of_birth',
        'promo_code',
        'type_earning_id',
        'serials_number',
        'expirated_driver_license',
        'serial_number_passport',
        'expirated_passport',
        'driver_license_type_id',
        'passport_office_id',
        'address',
        'district_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(DriverProfileStatus::class, 'driver_profile_status_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(DriverProfileType::class, 'driver_profile_type_id', 'id');
    }

    public function car()
    {
        return $this->belongsTo(DriverProfileCar::class, 'id', 'driver_profile_id');
    }

    public function cause()
    {
        return $this->belongsTo(DriverProfileCause::class, 'cause_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function passport_office()
    {
        return $this->belongsTo(PassportOffice::class, 'passport_office_id', 'id');
    }

    public function driver_license_type()
    {
        return $this->belongsTo(DriverLicenseType::class, 'driver_license_type_id', 'id');
    }

    public function created_user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
