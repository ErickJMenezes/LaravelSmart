<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hsp extends OracleEloquent
{
    use Compoships;

    protected $table = 'hsp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hsp_pac', 'hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['hsp_relat_alta_cdg_num', 'hsp_relat_alta_cdg_num', 'hsp_relat_alta_cdg_serie', 'hsp_relat_alta_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['hsp_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['hsp_cnv'],
            ['cnv_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['hsp_dif_acomod_mot_cod', 'hsp_dif_acomod_mot_cod', 'hsp_dif_acomod_mot_tipo', 'hsp_dif_acomod_mot_tipo', 'hsp_planserv_bm_mot_cod', 'hsp_planserv_bm_mot_cod', 'hsp_planserv_bm_mot_tipo', 'hsp_planserv_bm_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['hsp_esp_cod'],
            ['esp_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['hsp_loc'],
            ['loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['hsp_pac'],
            ['pac_reg'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['hsp_pln_cod', 'hsp_pln_cod', 'hsp_cnv', 'hsp_cnv'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hsp_mde', 'hsp_psv_solic', 'hsp_mda'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function rpv(): BelongsTo
    {
        return $this->belongsTo(
            Rpv::class,
            ['hsp_rpv_id'],
            ['rpv_id'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['hsp_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['hsp_usr_adm', 'hsp_usr_alta', 'hsp_lib_pag_usr_login', 'hsp_trat_lib_usr_login', 'hsp_pre_alta_reg_usr'],
            ['usr_login', 'usr_login', 'usr_login', 'usr_login', 'usr_login'],
        );
    }
}
