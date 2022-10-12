<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bmc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bmc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bmc_mcc_serie', 'bmc_bxa_num', 'bmc_mcc_lote', 'bmc_mcc_seq', 'bmc_bxa_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bxa(): BelongsTo
    {
        return $this->belongsTo(
            Bxa::class,
            ['bmc_bxa_num', 'bmc_bxa_num', 'bmc_bxa_serie', 'bmc_bxa_serie'],
            ['bxa_num', 'bxa_serie', 'bxa_num', 'bxa_serie'],
        );
    }

    public function mccOld(): BelongsTo
    {
        return $this->belongsTo(
            MccOld::class,
            ['bmc_mcc_seq', 'bmc_mcc_seq', 'bmc_mcc_seq', 'bmc_mcc_lote', 'bmc_mcc_lote', 'bmc_mcc_lote', 'bmc_mcc_serie', 'bmc_mcc_serie', 'bmc_mcc_serie'],
            ['mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote'],
        );
    }
}
