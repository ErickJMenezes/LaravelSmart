<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lil extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lil_osm_num', 'lil_smm_num', 'lil_osm_serie', 'lil_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lil_usr_login'],
            ['usr_login'],
        );
    }

    public function usi(): BelongsTo
    {
        return $this->belongsTo(
            Usi::class,
            ['lil_usi_login'],
            ['usi_login'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['lil_smm_num', 'lil_smm_num', 'lil_smm_num', 'lil_osm_num', 'lil_osm_num', 'lil_osm_num', 'lil_osm_serie', 'lil_osm_serie', 'lil_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
