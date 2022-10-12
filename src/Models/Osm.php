<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Osm extends OracleEloquent
{
    use Compoships;

    protected $table = 'osm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['osm_serie', 'osm_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['osm_pln_cod', 'osm_pln_cod', 'osm_cnv', 'osm_cnv'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['osm_cml_cnv_cod', 'osm_cnv'],
            ['cnv_cod', 'cnv_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['osm_hsp_num', 'osm_hsp_num', 'osm_pac', 'osm_pac'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function leg(): BelongsTo
    {
        return $this->belongsTo(
            Leg::class,
            ['osm_leg_cod'],
            ['leg_cod'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['osm_lta_cod'],
            ['lta_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['osm_planserv_bm_mot_cod', 'osm_planserv_bm_mot_cod', 'osm_planserv_bm_mot_tipo', 'osm_planserv_bm_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['osm_pac'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['osm_mreq', 'osm_mreq_2', 'osm_mreq_3'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['osm_sap_cod'],
            ['sap_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['osm_str'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['osm_usr_login_cad'],
            ['usr_login'],
        );
    }
}
