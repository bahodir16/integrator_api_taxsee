<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressCategory extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $table = 'address_category';

    protected $fillable = [
        'name',
        'is_active',
    ];
}
