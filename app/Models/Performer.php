<?php

namespace App\Models;

use App\Models\Balance\DriverBalance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;

class Performer extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $connection = 'mysql_performer';

    const CITY_ID = 2;

    const ACTIVE = 1;

    const TYPE_EARNING_ID = 2;

    public $table = 'performers';

    protected static $logFillable = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'gender',
        'date_of_birth',
        'email',
        'contact_number',
        'promo_code',
        'city_id',
        'type_earning_id',
        'serials_number',
        'expirated_driver_license',
        'serial_number_passport',
        'expirated_passport',
        'district_id',
        'passport_office_id',
        'address',
        'status',
        'phone',
        'phone_without_code',
        'password',
        'login',
        'is_free',
        'fcm_token',
    ];

    public function type_earning()
    {
        return $this->hasMany(TypeEarning::class, 'id', 'type_earning_id');
    }

    public function AauthAcessToken()
    {
        return $this->hasMany(OauthAccessToken::class, 'user_id', 'id');
    }

    protected $hidden = [
        'password',
        'city_id',
        'type_movement_id',
        'phone_without_code',
        'promo_code',
        'parent_id',
    ];

    public function performer_transports()
    {
        return $this->hasMany(PerformerTransport::class, 'performer_id', 'id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function active_car()
    {
        return $this->hasOne(PerformerTransport::class, 'performer_id', 'id');
    }

    public function driver_cars()
    {
        return $this->belongsToMany(PerformerTransport::class, DriverCar::class, 'driver_id', 'car_id');
    }

    public function balance()
    {
        return $this->belongsTo(DriverBalance::class, 'id', 'performer_id');
    }

    public function performer_location()
    {
        return $this->belongsTo(PerformerLocation::class, 'id', 'performer_id');
    }

    public function passport_office()
    {
        return $this->belongsTo(PassportOffice::class, 'passport_office_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function performer_login()
    {
        return $this->belongsTo(Accounts::class, 'id');
    }

    public function orders()
    {
        $this->setConnection('sip_gram_api');

        return $this->belongsToMany(Order::class, 'sip_gram_api.performer_orders');
        // return DB::table('sip_gram_api.performer_orders')->where('performer_id', $this->id)->get();
    }
}
