<?php

namespace App\Models;

class CallHistory extends BasicModel
{
    protected $fillable = [
        'sip_id',
        'direction',
        'date',
        'dial_tone_mode',
        'talk_mode_call',
        'duration',
    ];
}
