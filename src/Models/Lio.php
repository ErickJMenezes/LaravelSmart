<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lio extends OracleEloquent
{
    use Compoships;

    protected $table = 'lio';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lio_num', 'lio_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lio_usr_login'],
            ['usr_login'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['lio_osm_num', 'lio_osm_num', 'lio_osm_serie', 'lio_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lio_pac_reg'],
            ['pac_reg'],
        );
    }
}
