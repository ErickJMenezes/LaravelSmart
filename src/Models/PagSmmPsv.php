<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PagSmmPsv extends OracleEloquent
{
    use Compoships;

    protected $table = 'pag_smm_psv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pag_sp_pag_serie', 'pag_sp_smm_osm', 'pag_sp_smm_num', 'pag_sp_pag_lote', 'pag_sp_smm_osm_serie', 'pag_sp_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pag(): BelongsTo
    {
        return $this->belongsTo(
            Pag::class,
            ['pag_sp_pag_lote', 'pag_sp_pag_lote', 'pag_sp_pag_serie', 'pag_sp_pag_serie'],
            ['pag_lote', 'pag_serie', 'pag_lote', 'pag_serie'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['pag_sp_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['pag_sp_smm_num', 'pag_sp_smm_num', 'pag_sp_smm_num', 'pag_sp_smm_osm', 'pag_sp_smm_osm', 'pag_sp_smm_osm', 'pag_sp_smm_osm_serie', 'pag_sp_smm_osm_serie', 'pag_sp_smm_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }
}
