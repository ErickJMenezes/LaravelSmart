<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bro extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bro_osm_num', 'bro_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function broMod(): BelongsTo
    {
        return $this->belongsTo(
            BroMod::class,
            ['bro_analise'],
            ['bro_mod_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['bro_osm_num', 'bro_osm_num', 'bro_osm_serie', 'bro_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['bro_str_exec'],
            ['str_cod'],
        );
    }
}
