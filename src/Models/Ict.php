<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ict extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ict_osm_num', 'ict_id', 'ict_smm_num', 'ict_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['ict_psv_cod_destino'],
            ['psv_cod'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['ict_smm_num', 'ict_smm_num', 'ict_smm_num', 'ict_osm_num', 'ict_osm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_osm_serie', 'ict_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
