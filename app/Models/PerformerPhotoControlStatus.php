<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformerPhotoControlStatus extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    const STATUS_ASSIGN = 1;

    const STATUS_ACCEPT = 2;

    const STATUS_NOT_ACCEPT = 3;

    const STATUS_NOT_CHECK = 4;
}
