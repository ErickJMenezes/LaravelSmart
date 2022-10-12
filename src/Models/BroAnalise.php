<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroAnalise extends OracleEloquent
{
    use Compoships;

    protected $table = 'bro_analise';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bro_a_osm_serie', 'bro_a_osm_num', 'bro_a_mod_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bro(): BelongsTo
    {
        return $this->belongsTo(
            Bro::class,
            ['bro_a_osm_num', 'bro_a_osm_num', 'bro_a_osm_serie', 'bro_a_osm_serie'],
            ['bro_osm_num', 'bro_osm_serie', 'bro_osm_num', 'bro_osm_serie'],
        );
    }

    public function broMod(): BelongsTo
    {
        return $this->belongsTo(
            BroMod::class,
            ['bro_a_mod_cod'],
            ['bro_mod_cod'],
        );
    }
}
