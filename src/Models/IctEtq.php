<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IctEtq extends OracleEloquent
{
    use Compoships;

    protected $table = 'ict_etq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ict_e_id', 'ict_e_osm_serie', 'ict_e_smm_num', 'ict_e_cod_amostra', 'ict_e_osm_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ict(): BelongsTo
    {
        return $this->belongsTo(
            Ict::class,
            ['ict_e_id', 'ict_e_id', 'ict_e_id', 'ict_e_id', 'ict_e_smm_num', 'ict_e_smm_num', 'ict_e_smm_num', 'ict_e_smm_num', 'ict_e_osm_num', 'ict_e_osm_num', 'ict_e_osm_num', 'ict_e_osm_num', 'ict_e_osm_serie', 'ict_e_osm_serie', 'ict_e_osm_serie', 'ict_e_osm_serie'],
            ['ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie'],
        );
    }
}
