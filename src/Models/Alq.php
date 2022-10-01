<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Alq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['alq_cod_aliq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pvtDestino(): BelongsTo
    {
        return $this->belongsTo(
            PvtDestino::class,
            ['alq_pvt_d_id'],
            ['pvt_d_id'],
        );
    }
}
