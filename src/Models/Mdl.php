<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mdl extends OracleEloquent
{
    use Compoships;

    protected $table = 'mdl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mdl_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['mdl_pac_reg'],
            ['pac_reg'],
        );
    }

    public function mdlFile(): BelongsTo
    {
        return $this->belongsTo(
            MdlFile::class,
            ['mdl_file_id_from', 'mdl_file_id_to'],
            ['mdl_f_id', 'mdl_f_id'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['mdl_osm_num', 'mdl_osm_num', 'mdl_osm_serie', 'mdl_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }
}
