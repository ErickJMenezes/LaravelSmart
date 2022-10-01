<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclFai extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcl_fai_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function iif(): BelongsTo
    {
        return $this->belongsTo(
            Iif::class,
            ['rcl_fai_iif_cod'],
            ['iif_cod'],
        );
    }
}
