<?php

namespace App\Models;

class Allowance extends BasicModel
{
    public const ACTIVE = 1;

    public const DELETE = 0;

    protected $fillable = [
        'name',
        'price',
    ];
}
