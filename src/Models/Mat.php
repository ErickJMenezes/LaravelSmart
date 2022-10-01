<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mat extends OracleEloquent
{
    use Compoships;

    protected $table = 'mat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfop(): BelongsTo
    {
        return $this->belongsTo(
            Cfop::class,
            ['mat_cred_cfop_cod'],
            ['cfop_cod'],
        );
    }

    public function cst(): BelongsTo
    {
        return $this->belongsTo(
            Cst::class,
            ['mat_cred_cofins_cst_cod', 'mat_cred_pis_cst_cod'],
            ['cst_cod', 'cst_cod'],
        );
    }

    public function mats(): HasMany
    {
        return $this->hasMany(
            Mat::class,
            ['mat_cod'],
            ['mat_ester_mat_cod'],
        );
    }

    public function gcp(): BelongsTo
    {
        return $this->belongsTo(
            Gcp::class,
            ['mat_gcp_cod'],
            ['gcp_cod'],
        );
    }

    public function lma(): BelongsTo
    {
        return $this->belongsTo(
            Lma::class,
            ['mat_gmm_cod', 'mat_gmm_cod', 'mat_lma_cod', 'mat_lma_cod'],
            ['lma_cod', 'lma_gmm_cod', 'lma_cod', 'lma_gmm_cod'],
        );
    }

    public function ptg(): BelongsTo
    {
        return $this->belongsTo(
            Ptg::class,
            ['mat_ptg_cod'],
            ['ptg_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['mat_sba_cod'],
            ['sba_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['mat_smk_cod', 'mat_smk_cod', 'mat_ctf_tipo', 'mat_ctf_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['mat_unm_cod_entrada', 'mat_unm_cod_saida', 'mat_unm_venda'],
            ['unm_cod', 'unm_cod', 'unm_cod'],
        );
    }

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['mat_fne_ult_entrada'],
            ['fne_cod'],
        );
    }
}
