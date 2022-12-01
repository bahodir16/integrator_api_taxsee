<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'model_id',
        'model_type',
    ];

    public function model()
    {
        return $this->morphTo();
    }
}
