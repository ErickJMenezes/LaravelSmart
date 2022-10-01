<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Csd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['csd_ssd_cod_sauded', 'csd_cod_campo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['csd_atr_num', 'csd_atr_num', 'csd_atr_dsc', 'csd_atr_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function ssd(): BelongsTo
    {
        return $this->belongsTo(
            Ssd::class,
            ['csd_ssd_cod_sauded'],
            ['ssd_cod_sauded'],
        );
    }
}
