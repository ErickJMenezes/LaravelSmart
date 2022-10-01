<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclEdt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcl_e_dthr_start', 'rcl_e_gr_ses_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['rcl_e_smm_num', 'rcl_e_smm_num', 'rcl_e_smm_num', 'rcl_e_osm_num', 'rcl_e_osm_num', 'rcl_e_osm_num', 'rcl_e_osm_serie', 'rcl_e_osm_serie', 'rcl_e_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}