<?php

namespace App\Models;

use App\Models\Billing\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPaymentProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'ip',
        'body',
        'errors',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
