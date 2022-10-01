<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcl extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_cod', 'rcl_dthr', 'rcl_pac', 'rcl_tpcod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fte(): BelongsTo
    {
        return $this->belongsTo(
            Fte::class,
            ['rcl_fte_num', 'rcl_fte_num', 'rcl_fte_serie', 'rcl_fte_serie'],
            ['fte_num', 'fte_serie', 'fte_num', 'fte_serie'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rcl_cod', 'rcl_cod', 'rcl_tpcod', 'rcl_tpcod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['rcl_smm', 'rcl_smm', 'rcl_smm', 'rcl_osm', 'rcl_osm', 'rcl_osm', 'rcl_osm_serie', 'rcl_osm_serie', 'rcl_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['rcl_cdg_num', 'rcl_cdg_num', 'rcl_cdg_serie', 'rcl_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['rcl_dsc_base'],
            ['dsc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rcl_med', 'rcl_psv_prev_co_ass'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rcl_ccih_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rcl_usr_login'],
            ['usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['rcl_pac'],
            ['pac_reg'],
        );
    }
}
