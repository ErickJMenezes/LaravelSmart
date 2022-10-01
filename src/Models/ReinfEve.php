<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ReinfEve extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function reinfTpEve(): BelongsTo
    {
        return $this->belongsTo(
            ReinfTpEve::class,
            ['reinf_eve_cod'],
            ['reinf_tp_eve_cod'],
        );
    }
}
