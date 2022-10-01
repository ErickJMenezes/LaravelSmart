<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Osa extends OracleEloquent
{
    use Compoships;

    protected $table = 'osa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['osa_osm_serie', 'osa_dthr', 'osa_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['osa_mot_cod', 'osa_mot_cod', 'osa_mot_tipo', 'osa_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['osa_osm_num', 'osa_osm_num', 'osa_osm_serie', 'osa_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['osa_usr_login'],
            ['usr_login'],
        );
    }
}
