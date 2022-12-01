<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchAddress extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'search',
        'synonyms',
        'synonym_street',
        'model_id',
        'model',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'model_id', 'id')->with(['street', 'synonyms']);
    }

    public function fast_address()
    {
        return $this->belongsTo(FastAddress::class, 'model_id', 'id')->with(['street', 'synonyms']);
    }
}
