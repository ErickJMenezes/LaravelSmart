<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pex extends OracleEloquent
{
    use Compoships;

    protected $table = 'pex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pex_pac', 'pex_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['pex_cdg_num', 'pex_cdg_num', 'pex_cdg_serie', 'pex_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function cvc(): BelongsTo
    {
        return $this->belongsTo(
            Cvc::class,
            ['pex_cvc_num', 'pex_cvc_num', 'pex_cvc_serie', 'pex_cvc_serie'],
            ['cvc_num', 'cvc_serie', 'cvc_num', 'cvc_serie'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['pex_osm_num', 'pex_osm_num', 'pex_osm_serie', 'pex_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pex_pac'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['pex_med'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pex_del_usr_login', 'pex_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['pex_tap_cod'],
            ['tap_cod'],
        );
    }
}
