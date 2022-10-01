<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AtrLoinc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['atr_l_num', 'atr_l_loinc_num', 'atr_l_amo_cod', 'atr_l_dsc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['atr_l_amo_cod'],
            ['amo_cod'],
        );
    }

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['atr_l_num', 'atr_l_num', 'atr_l_dsc_cod', 'atr_l_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
