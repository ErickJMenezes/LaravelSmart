<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IctCai extends OracleEloquent
{
    use Compoships;

    protected $table = 'ict_cai';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ict_cai_ict_osm_serie', 'ict_cai_ict_id', 'ict_cai_cai_cod', 'ict_cai_ict_osm_num', 'ict_cai_ict_smm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ict(): BelongsTo
    {
        return $this->belongsTo(
            Ict::class,
            ['ict_cai_ict_id', 'ict_cai_ict_id', 'ict_cai_ict_id', 'ict_cai_ict_id', 'ict_cai_ict_smm_num', 'ict_cai_ict_smm_num', 'ict_cai_ict_smm_num', 'ict_cai_ict_smm_num', 'ict_cai_ict_osm_num', 'ict_cai_ict_osm_num', 'ict_cai_ict_osm_num', 'ict_cai_ict_osm_num', 'ict_cai_ict_osm_serie', 'ict_cai_ict_osm_serie', 'ict_cai_ict_osm_serie', 'ict_cai_ict_osm_serie'],
            ['ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie', 'ict_id', 'ict_smm_num', 'ict_osm_num', 'ict_osm_serie'],
        );
    }

    public function cai(): BelongsTo
    {
        return $this->belongsTo(
            Cai::class,
            ['ict_cai_cai_cod'],
            ['cai_cod'],
        );
    }
}
