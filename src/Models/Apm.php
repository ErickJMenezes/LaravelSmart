<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apm extends OracleEloquent
{
    use Compoships;

    protected $table = 'apm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apm_pac', 'apm_hsp', 'apm_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['apm_cdg_num', 'apm_cdg_num', 'apm_cdg_serie', 'apm_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['apm_pac'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['apm_med', 'apm_med_ass'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function sma(): BelongsTo
    {
        return $this->belongsTo(
            Sma::class,
            ['apm_sma_num', 'apm_sma_num', 'apm_sma_serie', 'apm_sma_serie'],
            ['sma_num', 'sma_serie', 'sma_num', 'sma_serie'],
        );
    }
}
