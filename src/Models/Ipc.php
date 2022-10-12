<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ipc extends OracleEloquent
{
    use Compoships;

    protected $table = 'ipc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ipc_fpc_serie', 'ipc_osm_serie', 'ipc_osm_num', 'ipc_fpc_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fpc(): BelongsTo
    {
        return $this->belongsTo(
            Fpc::class,
            ['ipc_fpc_num', 'ipc_fpc_num', 'ipc_fpc_serie', 'ipc_fpc_serie'],
            ['fpc_num', 'fpc_serie', 'fpc_num', 'fpc_serie'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['ipc_osm_num', 'ipc_osm_num', 'ipc_osm_serie', 'ipc_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ipc_usr_login_dev'],
            ['usr_login'],
        );
    }
}
