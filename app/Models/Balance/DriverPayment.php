<?php

namespace App\Models\Balance;

use App\Models\Billing\PaymentType;
use App\Models\Billing\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverPayment extends Model
{
    protected $connection = 'mysql_performer';

    use HasFactory;

    protected $fillable = [
        'amount',
        'performer_id',
        'provider_tran_id',
        'transaction_id',
        'payment_type_id',
    ];

    const ACCOUNT_ID_COLUMN = 'performer_id';

    public function provider()
    {
        return $this->setConnection('mysql')->belongsTo(Provider::class, 'provider_tran_id', 'id');
    }

    public function payment_type()
    {
        return $this->setConnection('mysql')->belongsTo(PaymentType::class);
    }
}
