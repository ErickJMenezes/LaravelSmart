<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ccr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ccr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ccr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function age(): BelongsTo
    {
        return $this->belongsTo(
            Age::class,
            ['ccr_age_seq'],
            ['age_seq'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ccr_ban_cct_cod_trans_chq', 'ccr_cct_cod', 'ccr_ban_cct_cod_trans'],
            ['cct_cod', 'cct_cod', 'cct_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ccr_cfo_cod_rateio', 'ccr_cfo_cod'],
            ['cfo_cod', 'cfo_cod'],
        );
    }

    public function fcf(): BelongsTo
    {
        return $this->belongsTo(
            Fcf::class,
            ['ccr_fcf_cod_calc_unp'],
            ['fcf_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['ccr_gcc_cod', 'ccr_ident_cr_gcc_cod'],
            ['gcc_cod', 'gcc_cod'],
        );
    }

    public function tcc(): BelongsTo
    {
        return $this->belongsTo(
            Tcc::class,
            ['ccr_tcc_cod'],
            ['tcc_cod'],
        );
    }
}
