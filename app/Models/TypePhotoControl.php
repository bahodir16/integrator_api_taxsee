<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypePhotoControl extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'description',
        'alias_for_file_name',
        'created_by',
    ];

    const FOR_CAR_IDS = [7];
}
