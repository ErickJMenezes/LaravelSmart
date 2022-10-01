<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RseOsm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rse_o_osm_serie', 'rse_o_rse_serie', 'rse_o_rse_num', 'rse_o_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['rse_o_osm_num', 'rse_o_osm_num', 'rse_o_osm_serie', 'rse_o_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function rse(): BelongsTo
    {
        return $this->belongsTo(
            Rse::class,
            ['rse_o_rse_num', 'rse_o_rse_num', 'rse_o_rse_serie', 'rse_o_rse_serie'],
            ['rse_num', 'rse_serie', 'rse_num', 'rse_serie'],
        );
    }
}
