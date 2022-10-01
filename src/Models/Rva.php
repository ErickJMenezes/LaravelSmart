<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rva extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rva_osm_num', 'rva_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['rva_osm_num', 'rva_osm_num', 'rva_osm_serie', 'rva_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }
}
