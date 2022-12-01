<?php

namespace App\Models\Asterisk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdr extends Model
{
    use HasFactory;

    protected $table = 'cdr';

    const ANSWERED = 'ANSWERED';

    const NO_ANSWER = 'NO ANSWER';
}
