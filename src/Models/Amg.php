<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Amg extends OracleEloquent
{
    use Compoships;

    protected $table = 'amg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['amg_pac', 'amg_ext', 'amg_dthr_ini'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['amg_pac'],
            ['pac_reg'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['amg_loc_cod'],
            ['loc_cod'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['amg_smm_num', 'amg_smm_num', 'amg_smm_num', 'amg_osm_num', 'amg_osm_num', 'amg_osm_num', 'amg_osm_serie', 'amg_osm_serie', 'amg_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
