<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalTokens extends Model
{
    use HasFactory;

    protected $fillable = [
        'performer_id',
        'phone',
        'token',
        'device_id',
        'is_active',
        'version',
        'local',
        'application',
        'organization',
        'C_IMEI',
        'advertising_id',
    ];
}
