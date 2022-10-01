<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AtrMap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['atr_m_dsc_cod', 'atr_m_atr_num', 'atr_m_vl_min', 'atr_m_met_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function met(): BelongsTo
    {
        return $this->belongsTo(
            Met::class,
            ['atr_m_met_cod', 'atr_m_met_cod', 'atr_m_met_cod', 'atr_m_atr_num', 'atr_m_atr_num', 'atr_m_atr_num', 'atr_m_dsc_cod', 'atr_m_dsc_cod', 'atr_m_dsc_cod'],
            ['met_cod', 'met_atr_num', 'met_dsc_cod', 'met_cod', 'met_atr_num', 'met_dsc_cod', 'met_cod', 'met_atr_num', 'met_dsc_cod'],
        );
    }
}
