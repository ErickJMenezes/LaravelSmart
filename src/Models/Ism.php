<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ism extends OracleEloquent
{
    use Compoships;

    protected $table = 'ism';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ism_sma_serie', 'ism_seq', 'ism_sma_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['ism_mat_cod'],
            ['mat_cod'],
        );
    }

    public function mco(): BelongsTo
    {
        return $this->belongsTo(
            Mco::class,
            ['ism_mco_cod'],
            ['mco_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['ism_nao_atende_mot_cod', 'ism_nao_atende_mot_cod', 'ism_nao_atende_mot_tipo', 'ism_nao_atende_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pri(): BelongsTo
    {
        return $this->belongsTo(
            Pri::class,
            ['ism_pri_cod'],
            ['pri_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['ism_sba_rep'],
            ['sba_cod'],
        );
    }

    public function sma(): BelongsTo
    {
        return $this->belongsTo(
            Sma::class,
            ['ism_sma_num', 'ism_sma_num', 'ism_sma_serie', 'ism_sma_serie'],
            ['sma_num', 'sma_serie', 'sma_num', 'sma_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ism_str_cod'],
            ['str_cod'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['ism_unm_cod'],
            ['unm_cod'],
        );
    }

    public function mtr(): BelongsTo
    {
        return $this->belongsTo(
            Mtr::class,
            ['ism_val_farm_mtr_id'],
            ['mtr_id'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['ism_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function gcp(): BelongsTo
    {
        return $this->belongsTo(
            Gcp::class,
            ['ism_gcp_cod'],
            ['gcp_cod'],
        );
    }

    public function icp(): BelongsTo
    {
        return $this->belongsTo(
            Icp::class,
            ['ism_cop_num', 'ism_cop_num', 'ism_cop_num', 'ism_cop_serie', 'ism_cop_serie', 'ism_cop_serie', 'ism_icp_seq', 'ism_icp_seq', 'ism_icp_seq'],
            ['icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie'],
        );
    }

    public function ivt(): BelongsTo
    {
        return $this->belongsTo(
            Ivt::class,
            ['ism_ivt_id'],
            ['ivt_id'],
        );
    }

    public function kmt(): BelongsTo
    {
        return $this->belongsTo(
            Kmt::class,
            ['ism_kmt_cod'],
            ['kmt_cod'],
        );
    }
}
