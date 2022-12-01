<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordChanges extends Model
{
    use HasFactory, Uuids;

    protected $connection = 'mysql_performer';

    protected $table = 'password_changes';

    protected $fillable = [
        'phone_number',
        'sms_code',
        'step_1',
        'step_2',
    ];
}
