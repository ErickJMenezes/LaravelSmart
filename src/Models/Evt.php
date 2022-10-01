<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Evt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['evt_dthr', 'evt_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['evt_usr_login'],
            ['usr_login'],
        );
    }

    public function aud(): BelongsTo
    {
        return $this->belongsTo(
            Aud::class,
            ['evt_aud_num', 'evt_aud_num', 'evt_aud_serie', 'evt_aud_serie'],
            ['aud_num', 'aud_serie', 'aud_num', 'aud_serie'],
        );
    }
}
