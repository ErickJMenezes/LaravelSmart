<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pti extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pti_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['pti_benf_cct_cod_patr'],
            ['cct_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['pti_ccr_cod_ativo', 'pti_ccr_cod_despesa'],
            ['ccr_cod', 'ccr_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['pti_emp_cod_fornec'],
            ['emp_cod'],
        );
    }

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['pti_eqp_num'],
            ['eqp_num'],
        );
    }

    public function ptg(): BelongsTo
    {
        return $this->belongsTo(
            Ptg::class,
            ['pti_ptg_cod'],
            ['ptg_cod'],
        );
    }

    public function ptis(): HasMany
    {
        return $this->hasMany(
            Pti::class,
            ['pti_cod'],
            ['pti_assoc_pti_cod'],
        );
    }
}
