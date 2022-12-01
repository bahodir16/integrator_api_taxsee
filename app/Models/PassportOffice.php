<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportOffice extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    public $table = 'passport_offices';

    protected $fillable = [
        'name',
    ];
}
