<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Orl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['orl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['orl_osm_num', 'orl_osm_num', 'orl_osm_serie', 'orl_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['orl_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['orl_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['orl_usr_login'],
            ['usr_login'],
        );
    }
}
