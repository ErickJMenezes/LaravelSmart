<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCon extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_con';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_con_esp_cod', 'dw_con_str_unidade', 'dw_con_psv_cod', 'dw_con_mmyy'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['dw_con_esp_cod'],
            ['esp_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['dw_con_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_con_str_unidade'],
            ['str_cod'],
        );
    }
}
