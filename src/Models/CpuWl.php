<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CpuWl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cpu_wl_str_cod', 'cpu_wl_cnv_cod', 'cpu_wl_esp_cod', 'cpu_wl_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cpu_wl_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['cpu_wl_esp_cod'],
            ['esp_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cpu_wl_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cpu_wl_str_cod'],
            ['str_cod'],
        );
    }
}
