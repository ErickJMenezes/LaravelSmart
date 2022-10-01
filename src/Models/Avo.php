<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Avo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['avo_dthr_alter', 'avo_osm_serie', 'avo_osm_num', 'avo_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['avo_smm_num', 'avo_smm_num', 'avo_smm_num', 'avo_osm_num', 'avo_osm_num', 'avo_osm_num', 'avo_osm_serie', 'avo_osm_serie', 'avo_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function rpi(): BelongsTo
    {
        return $this->belongsTo(
            Rpi::class,
            ['avo_rpi_num', 'avo_rpi_num', 'avo_rpi_serie', 'avo_rpi_serie'],
            ['rpi_num', 'rpi_serie', 'rpi_num', 'rpi_serie'],
        );
    }
}
