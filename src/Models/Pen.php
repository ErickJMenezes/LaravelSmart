<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pen extends OracleEloquent
{
    use Compoships;

    protected $table = 'pen';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pen_osm_serie', 'pen_osm_num', 'pen_dthr_entrega', 'pen_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pen_canc_usr_login'],
            ['usr_login'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['pen_smm_num', 'pen_smm_num', 'pen_smm_num', 'pen_osm_num', 'pen_osm_num', 'pen_osm_num', 'pen_osm_serie', 'pen_osm_serie', 'pen_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
