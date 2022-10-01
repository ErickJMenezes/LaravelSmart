<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cdc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cdc_pac'],
            ['pac_reg'],
        );
    }
}
