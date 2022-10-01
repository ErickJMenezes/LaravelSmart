<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dig extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dig_usr_login', 'dig_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dig_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dig_usr_login'],
            ['usr_login'],
        );
    }
}
