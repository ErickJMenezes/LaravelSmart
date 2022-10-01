<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ifa extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ifa_osm_serie', 'ifa_fva_id', 'ifa_osm_num', 'ifa_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fva(): BelongsTo
    {
        return $this->belongsTo(
            Fva::class,
            ['ifa_fva_id'],
            ['fva_id'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['ifa_smm_num', 'ifa_smm_num', 'ifa_smm_num', 'ifa_osm_num', 'ifa_osm_num', 'ifa_osm_num', 'ifa_osm_serie', 'ifa_osm_serie', 'ifa_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
