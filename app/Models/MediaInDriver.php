<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaInDriver extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $connection = 'mysql_performer';

    protected $guarded = false;
}
