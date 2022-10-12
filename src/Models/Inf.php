<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Inf extends OracleEloquent
{
    use Compoships;

    protected $table = 'inf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['inf_hsp_num', 'inf_pac_reg', 'inf_sit_cod', 'inf_dthr_ini'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['inf_adp_cod', 'inf_adp_cod', 'inf_adp_tipo', 'inf_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['inf_amo_cod'],
            ['amo_cod'],
        );
    }

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['inf_bac_dsc_cod'],
            ['dsc_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['inf_hsp_num', 'inf_hsp_num', 'inf_pac_reg', 'inf_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function rci(): BelongsTo
    {
        return $this->belongsTo(
            Rci::class,
            ['inf_rci_num', 'inf_rci_num', 'inf_rci_serie', 'inf_rci_serie'],
            ['rci_num', 'rci_serie', 'rci_num', 'rci_serie'],
        );
    }

    public function sit(): BelongsTo
    {
        return $this->belongsTo(
            Sit::class,
            ['inf_sit_cod'],
            ['sit_cod'],
        );
    }

    public function smm(): BelongsTo
    {
        return $this->belongsTo(
            Smm::class,
            ['inf_smm_num', 'inf_smm_num', 'inf_smm_num', 'inf_osm_num', 'inf_osm_num', 'inf_osm_num', 'inf_osm_serie', 'inf_osm_serie', 'inf_osm_serie'],
            ['smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie', 'smm_num', 'smm_osm', 'smm_osm_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['inf_str_unid'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['inf_usr_login'],
            ['usr_login'],
        );
    }
}
