<?php

namespace App\Models;

use App\Models\Employee\EmployeeGroupPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'division_id',
        'dop_phone',
        'user_id',
        'employee_group_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function employee_group()
    {
        return $this->belongsTo(EmployeeGroupPosition::class, 'employee_group_id', 'id')->with(['role', 'group']);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
