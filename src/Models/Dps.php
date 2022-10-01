<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dps extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dps_psv_cod', 'dps_ded_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ded(): BelongsTo
    {
        return $this->belongsTo(
            Ded::class,
            ['dps_ded_cod'],
            ['ded_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dps_psv_cod'],
            ['psv_cod'],
        );
    }
}
