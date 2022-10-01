<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlg extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlg_cth_num', 'dlg_hsp_num', 'dlg_pac_reg', 'dlg_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dch(): BelongsTo
    {
        return $this->belongsTo(
            Dch::class,
            ['dlg_dch_cod'],
            ['dch_cod'],
        );
    }

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['dlg_edl_cod'],
            ['edl_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['dlg_osm_num', 'dlg_osm_num', 'dlg_osm_serie', 'dlg_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['dlg_pac_reg'],
            ['pac_reg'],
        );
    }

    public function sat(): BelongsTo
    {
        return $this->belongsTo(
            Sat::class,
            ['dlg_sat_cod'],
            ['sat_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlg_usr_login', 'dlg_usr_login_destino'],
            ['usr_login', 'usr_login'],
        );
    }
}
