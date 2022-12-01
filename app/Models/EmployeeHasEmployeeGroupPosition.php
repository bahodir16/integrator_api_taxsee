<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHasEmployeeGroupPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'group_id',
        'role_id',
    ];

    public function group()
    {
        return $this->belongsTo(EmployeeGroup::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
