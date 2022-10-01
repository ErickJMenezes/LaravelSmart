<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iif extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['iif_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tif(): BelongsTo
    {
        return $this->belongsTo(
            Tif::class,
            ['iif_tif_cod'],
            ['tif_cod'],
        );
    }
}
