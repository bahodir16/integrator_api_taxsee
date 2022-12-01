<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;

    const CREATED = 1;

    const PROCESSING = 2;

    const PROCESSING_AUTO = 3;

    const PROCESSED = 4;

    const PROCESSED_AUTO = 5;

    const CANCELED = 6;

    protected $fillable = [
        'division_id',
        'order_id',
        'memo_id',
        'tariff_id',
        'performer_id',
        'category_violation_id',
        'violation_type_id',
        'violation_status_id',
        'violation_sanction_id',
        'period_sanction',
        'amount_off_sanction',
        'comment',
        'status',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function performer()
    {
        return $this->belongsTo(Performer::class, 'performer_id', 'id');
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class, 'tariff_id', 'id');
    }

    public function memo()
    {
        return $this->belongsTo(Memo::class, 'memo_id', 'id');
    }

    public function violationStatus()
    {
        return $this->belongsTo(ViolationStatus::class, 'status_id', 'id');
    }

    public function violationType()
    {
        return $this->belongsTo(ViolationType::class, 'violation_type_id', 'id');
    }

    public function violationSanction()
    {
        return $this->belongsTo(ViolationSanction::class, 'violation_sanction_id', 'id');
    }

    public function categoryViolation()
    {
        return $this->belongsTo(CategoryViolation::class, 'category_violation_id', 'id');
    }
}
