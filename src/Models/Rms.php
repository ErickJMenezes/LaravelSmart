<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rms extends OracleEloquent
{
    use Compoships;

    protected $table = 'rms';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rms_mns_num', 'rms_psv_cod', 'rms_osm_num', 'rms_smm_num', 'rms_osm_serie', 'rms_mns_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function epl(): BelongsTo
    {
        return $this->belongsTo(
            Epl::class,
            ['rms_epl_num', 'rms_epl_num', 'rms_epl_serie', 'rms_epl_serie'],
            ['epl_num', 'epl_serie', 'epl_num', 'epl_serie'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rms_psv_cod'],
            ['psv_cod'],
        );
    }

    public function rpi(): BelongsTo
    {
        return $this->belongsTo(
            Rpi::class,
            ['rms_rpi_num', 'rms_rpi_num', 'rms_rpi_serie', 'rms_rpi_serie'],
            ['rpi_num', 'rpi_serie', 'rpi_num', 'rpi_serie'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['rms_smm_num', 'rms_smm_num', 'rms_smm_num', 'rms_osm_num', 'rms_osm_num', 'rms_osm_num', 'rms_osm_serie', 'rms_osm_serie', 'rms_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
