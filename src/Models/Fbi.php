<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fbi extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fbi_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['fbi_osm_num', 'fbi_osm_num', 'fbi_osm_serie', 'fbi_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }
}
