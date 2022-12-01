<?php

namespace App\Models;

use App\Models\Employee\ModelHasRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'patronymic',
        'login',
        'email',
        'password',
        'role',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id', 'user_id')->with(['employee_group']);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id', 'user_id');
    }

    public function AauthAcessToken()
    {
        return $this->hasMany(OauthAccessToken::class, 'user_id', 'id');
    }

    public function model_has_roles()
    {
        return $this->belongsTo(ModelHasRole::class, 'id', 'model_id');
    }
}
