<?php

namespace App\Models;

class Division extends BasicModel
{
    protected $connection = 'mysql';

    public $table = 'divisions';

    const GRAM = 1;

    protected $fillable = [
        'id',
        'name',
        'org_type_id',
        'is_active',
    ];

    public function orgType()
    {
        return $this->belongsTo(OrgType::class, 'org_type_id', 'id');
    }
}
