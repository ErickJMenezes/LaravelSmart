<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lwf extends OracleEloquent
{
    use Compoships;

    protected $table = 'lwf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lwf_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['lwf_env_nwa_id', 'lwf_res_nwa_id'],
            ['nwa_id', 'nwa_id'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['lwf_smm_num', 'lwf_smm_num', 'lwf_smm_num', 'lwf_osm_num', 'lwf_osm_num', 'lwf_osm_num', 'lwf_osm_serie', 'lwf_osm_serie', 'lwf_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
