<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sma extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sma_serie', 'sma_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['sma_osm_num', 'sma_osm_num', 'sma_osm_serie', 'sma_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['sma_pac_reg'],
            ['pac_reg'],
        );
    }

    public function plp(): BelongsTo
    {
        return $this->belongsTo(
            Plp::class,
            ['sma_plp_id'],
            ['plp_id'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['sma_sba_cod', 'sma_sba_rep'],
            ['sba_cod', 'sba_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sma_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sma_usr_login_aut', 'sma_usr_login_sol'],
            ['usr_login', 'usr_login'],
        );
    }

    public function mtr(): BelongsTo
    {
        return $this->belongsTo(
            Mtr::class,
            ['sma_val_farm_mtr_id'],
            ['mtr_id'],
        );
    }
}
