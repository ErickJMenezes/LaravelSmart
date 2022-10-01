<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Idc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['idc_mns_serie', 'idc_mcc_lote', 'idc_mcc_serie', 'idc_mns_num', 'idc_mcc_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mcc(): BelongsTo
    {
        return $this->belongsTo(
            Mcc::class,
            ['idc_mcc_seq', 'idc_mcc_seq', 'idc_mcc_seq', 'idc_mcc_lote', 'idc_mcc_lote', 'idc_mcc_lote', 'idc_mcc_serie', 'idc_mcc_serie', 'idc_mcc_serie'],
            ['mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['idc_mns_num', 'idc_mns_num', 'idc_mns_serie', 'idc_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }
}
