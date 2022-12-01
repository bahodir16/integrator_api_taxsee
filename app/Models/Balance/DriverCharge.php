<?php

namespace App\Models\Balance;

use App\Models\Billing\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverCharge extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    public function provider()
    {
        return $this->setConnection('mysql')->belongsTo(Provider::class, 'provider_tran_id', 'id');
    }

    protected $fillable = [
        'amount',
        'performer_id',
        'provider_tran_id',
        'transaction_id',
        'balance_before',
        'charge_type_id',
    ];
}
