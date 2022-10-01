<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MmaFce extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mma_f_mcc_seq', 'mma_f_mma_num', 'mma_f_mcc_serie', 'mma_f_mma_serie', 'mma_f_mcc_lote'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mccOld(): BelongsTo
    {
        return $this->belongsTo(
            MccOld::class,
            ['mma_f_mcc_seq', 'mma_f_mcc_seq', 'mma_f_mcc_seq', 'mma_f_mcc_lote', 'mma_f_mcc_lote', 'mma_f_mcc_lote', 'mma_f_mcc_serie', 'mma_f_mcc_serie', 'mma_f_mcc_serie'],
            ['mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote'],
        );
    }

    public function mma(): BelongsTo
    {
        return $this->belongsTo(
            Mma::class,
            ['mma_f_mma_num', 'mma_f_mma_num', 'mma_f_mma_serie', 'mma_f_mma_serie'],
            ['mma_num', 'mma_serie', 'mma_num', 'mma_serie'],
        );
    }
}
