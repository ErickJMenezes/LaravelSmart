<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lft extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lft_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lft_sap_cod'],
            ['sap_cod'],
        );
    }
}
