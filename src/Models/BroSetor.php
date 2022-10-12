<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroSetor extends OracleEloquent
{
    use Compoships;

    protected $table = 'bro_setor';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bro_setor_osm_serie', 'bro_setor_osm_num', 'bro_setor_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bro(): BelongsTo
    {
        return $this->belongsTo(
            Bro::class,
            ['bro_setor_osm_num', 'bro_setor_osm_num', 'bro_setor_osm_serie', 'bro_setor_osm_serie'],
            ['bro_osm_num', 'bro_osm_serie', 'bro_osm_num', 'bro_osm_serie'],
        );
    }
}
