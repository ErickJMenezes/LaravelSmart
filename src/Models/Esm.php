<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Esm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['esm_esp', 'esm_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['esm_med'],
            ['psv_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['esm_esp'],
            ['esp_cod'],
        );
    }
}
