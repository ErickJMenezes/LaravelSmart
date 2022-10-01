<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpe extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpe_osm_serie', 'rpe_smm_num', 'rpe_osm_num', 'rpe_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['rpe_mot_cod', 'rpe_mot_cod', 'rpe_mot_tipo', 'rpe_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['rpe_cdg_num', 'rpe_cdg_num', 'rpe_cdg_serie', 'rpe_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rpe_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rpe_usr_login'],
            ['usr_login'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['rpe_smm_num', 'rpe_smm_num', 'rpe_smm_num', 'rpe_osm_num', 'rpe_osm_num', 'rpe_osm_num', 'rpe_osm_serie', 'rpe_osm_serie', 'rpe_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
