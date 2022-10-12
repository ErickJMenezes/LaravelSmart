<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sre extends OracleEloquent
{
    use Compoships;

    protected $table = 'sre';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sre_doc_cod', 'sre_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['sre_osm_num', 'sre_osm_num', 'sre_osm_serie', 'sre_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sre_usr_login'],
            ['usr_login'],
        );
    }
}
