<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationType extends Model
{
    use HasFactory;

    public const ACTIVE = 1;

    public const DISABLE = 0;

    protected $fillable = [
        'name',
        'violation_category_id',
        'description',
        'term_day',
        'raiting_check',
        'tariff_check',
        'is_active',
    ];

    public function violation_category()
    {
        return $this->belongsTo(ViolationCategory::class, 'violation_category_id', 'id');
    }
}
