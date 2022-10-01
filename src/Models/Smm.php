<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Smm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smm_osm', 'smm_num', 'smm_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['smm_rep', 'smm_audito_usr_login', 'smm_usr_login_lanc', 'smm_vac_usr_lanc'],
            ['usr_login', 'usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smm_cod', 'smm_cod', 'smm_tpcod', 'smm_tpcod', 'smm_pai_smk_cod', 'smm_pai_smk_cod', 'smm_pai_smk_tipo', 'smm_pai_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function ism(): BelongsTo
    {
        return $this->belongsTo(
            Ism::class,
            ['smm_ism_seq', 'smm_ism_seq', 'smm_ism_seq', 'smm_sma_num', 'smm_sma_num', 'smm_sma_num', 'smm_sma_serie', 'smm_sma_serie', 'smm_sma_serie'],
            ['ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie', 'ism_seq', 'ism_sma_num', 'ism_sma_serie'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['smm_canc_mot_cod', 'smm_canc_mot_cod', 'smm_canc_mot_tipo', 'smm_canc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['smm_loc_cod'],
            ['loc_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['smm_hsp_num', 'smm_hsp_num', 'smm_pac_reg', 'smm_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['smm_mns_num', 'smm_mns_num', 'smm_mns_serie', 'smm_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['smm_mte_seq', 'smm_mte_seq', 'smm_mte_serie', 'smm_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['smm_osm', 'smm_osm', 'smm_osm_serie', 'smm_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['smm_aux', 'smm_med'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function rpi(): BelongsTo
    {
        return $this->belongsTo(
            Rpi::class,
            ['smm_rpi_num', 'smm_rpi_num', 'smm_rpi_serie', 'smm_rpi_serie'],
            ['rpi_num', 'rpi_serie', 'rpi_num', 'rpi_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['smm_str'],
            ['str_cod'],
        );
    }

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['smm_amo_cod'],
            ['amo_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['smm_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['smm_usr_login_coleta'],
            ['col_cod'],
        );
    }

    public function fat(): BelongsTo
    {
        return $this->belongsTo(
            Fat::class,
            ['smm_cml_fat_num', 'smm_cml_fat_num', 'smm_cml_fat_serie', 'smm_cml_fat_serie', 'smm_fat', 'smm_fat', 'smm_fat_serie', 'smm_fat_serie'],
            ['fat_num', 'fat_serie', 'fat_num', 'fat_serie', 'fat_num', 'fat_serie', 'fat_num', 'fat_serie'],
        );
    }

    public function fte(): BelongsTo
    {
        return $this->belongsTo(
            Fte::class,
            ['smm_fte_num', 'smm_fte_num', 'smm_fte_serie', 'smm_fte_serie'],
            ['fte_num', 'fte_serie', 'fte_num', 'fte_serie'],
        );
    }

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['smm_gmr_cod'],
            ['gmr_cod'],
        );
    }

    public function hon(): BelongsTo
    {
        return $this->belongsTo(
            Hon::class,
            ['smm_hon_seq'],
            ['hon_seq'],
        );
    }

    public function mog(): BelongsTo
    {
        return $this->belongsTo(
            Mog::class,
            ['smm_mog_cod_ajuste'],
            ['mog_cod'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['smm_pro_cod'],
            ['pro_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['smm_pac_reg'],
            ['pac_reg'],
        );
    }
}
