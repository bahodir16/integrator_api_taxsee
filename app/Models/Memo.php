<?php

namespace App\Models;

class Memo extends BasicModel
{
    protected $fillable = [
        'memo_subject_id',
        'memo_type_id',
        'order_id',
        'comment',
        'phone',
        'status_id',
        'cause_id',
        'user_id',
        'processed_by',
    ];

    public function memoSubject()
    {
        return $this->belongsTo(MemoSubject::class);
    }

    public function memoType()
    {
        return $this->belongsTo(MemoType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(MemoStatus::class);
    }

    public function cause()
    {
        return $this->belongsTo(MemoCause::class);
    }

    public function processedBy()
    {
        return $this->belongsTo(User::class, 'processed_by', 'id');
    }
}
