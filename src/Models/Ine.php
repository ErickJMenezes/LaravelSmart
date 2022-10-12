<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ine extends OracleEloquent
{
    use Compoships;

    protected $table = 'ine';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ine_nfe_tipo', 'ine_nfe_num', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pti(): BelongsTo
    {
        return $this->belongsTo(
            Pti::class,
            ['ine_pti_cod'],
            ['pti_cod'],
        );
    }

    public function aft(): BelongsTo
    {
        return $this->belongsTo(
            Aft::class,
            ['ine_aft_num', 'ine_aft_num', 'ine_aft_serie', 'ine_aft_serie'],
            ['aft_num', 'aft_serie', 'aft_num', 'aft_serie'],
        );
    }

    public function cfop(): BelongsTo
    {
        return $this->belongsTo(
            Cfop::class,
            ['ine_cof_cfop_cod', 'ine_pis_cfop_cod'],
            ['cfop_cod', 'cfop_cod'],
        );
    }

    public function cst(): BelongsTo
    {
        return $this->belongsTo(
            Cst::class,
            ['ine_cof_cst_cod', 'ine_pis_cst_cod'],
            ['cst_cod', 'cst_cod'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['ine_cop_num', 'ine_cop_num', 'ine_cop_serie', 'ine_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ine_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mma(): BelongsTo
    {
        return $this->belongsTo(
            Mma::class,
            ['ine_mma_num', 'ine_mma_num', 'ine_mma_serie', 'ine_mma_serie'],
            ['mma_num', 'mma_serie', 'mma_num', 'mma_serie'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['ine_unm_cod'],
            ['unm_cod'],
        );
    }

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['ine_nfe_tipo', 'ine_nfe_tipo', 'ine_nfe_tipo', 'ine_nfe_tipo', 'ine_fne_cod', 'ine_fne_cod', 'ine_fne_cod', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_serie', 'ine_nfe_serie', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_num', 'ine_nfe_num', 'ine_nfe_num'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }
}
