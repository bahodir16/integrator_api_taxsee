<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Authenticatable implements HasMedia
{
    protected $guard = 'client';

    const COLLECTIONNAME = 'avatar';

    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    protected $fillable = [
        'id',
        'phone',
        'first_name',
        'last_name',
        'patronimyc',
        'gender',
        'birth_date',
        'email',
        'password',
        'login',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
