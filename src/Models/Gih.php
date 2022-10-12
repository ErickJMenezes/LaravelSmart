<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gih extends OracleEloquent
{
    use Compoships;

    protected $table = 'gih';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gih_cnv_cod', 'gih_dthr_ini', 'gih_pac_reg', 'gih_hsp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['gih_esquema_adp_cod', 'gih_esquema_adp_cod', 'gih_esquema_adp_tipo', 'gih_esquema_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['gih_med_bvi_cod'],
            ['bvi_cod'],
        );
    }

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['gih_cap_num', 'gih_cap_num', 'gih_pac_reg', 'gih_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['gih_cid_cod', 'gih_cid_cod', 'gih_cid_tip', 'gih_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['gih_cle_cod_escolha'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['gih_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function cop(): BelongsTo
    {
        return $this->belongsTo(
            Cop::class,
            ['gih_cop_num', 'gih_cop_num', 'gih_cop_serie', 'gih_cop_serie'],
            ['cop_num', 'cop_serie', 'cop_num', 'cop_serie'],
        );
    }

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['gih_edl_cod'],
            ['edl_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['gih_mat_cod'],
            ['mat_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['gih_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['gih_psv_cod'],
            ['psv_cod'],
        );
    }

    public function sma(): BelongsTo
    {
        return $this->belongsTo(
            Sma::class,
            ['gih_sma_num', 'gih_sma_num', 'gih_sma_serie', 'gih_sma_serie'],
            ['sma_num', 'sma_serie', 'sma_num', 'sma_serie'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['gih_smk_cod_cobra', 'gih_smk_cod_cobra', 'gih_smk_tipo_cobra', 'gih_smk_tipo_cobra', 'gih_smk_cod', 'gih_smk_cod', 'gih_smk_tipo', 'gih_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['gih_smm_num', 'gih_smm_num', 'gih_smm_num', 'gih_osm_num', 'gih_osm_num', 'gih_osm_num', 'gih_osm_serie', 'gih_osm_serie', 'gih_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['gih_str_cod_exec'],
            ['str_cod'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['gih_tab_cod'],
            ['tab_cod'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['gih_med_unm_cod_calc', 'gih_med_unm_cod'],
            ['unm_cod', 'unm_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gih_usr_login_lanc', 'gih_usr_login_alter'],
            ['usr_login', 'usr_login'],
        );
    }
}
