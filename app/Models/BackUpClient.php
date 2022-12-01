<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackUpClient extends Model
{
    use HasFactory, Uuids;

    protected $connection = 'mysql';

    protected $table = 'back_up_clients';
}
