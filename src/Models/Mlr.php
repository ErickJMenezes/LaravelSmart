<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mlr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mlr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['mlr_eqp_num'],
            ['eqp_num'],
        );
    }
}
