<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgOsm extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_osm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_osm_osm_num', 'img_osm_osm_serie', 'img_osm_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['img_osm_osm_num', 'img_osm_osm_num', 'img_osm_osm_serie', 'img_osm_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_osm_img_cod'],
            ['img_cod'],
        );
    }
}
