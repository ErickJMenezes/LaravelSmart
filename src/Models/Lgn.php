<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lgn extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lgn_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lgn_sap_cod'],
            ['sap_cod'],
        );
    }
}