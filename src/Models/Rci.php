<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rci extends OracleEloquent
{
    use Compoships;

    protected $table = 'rci';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rci_serie', 'rci_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ane(): BelongsTo
    {
        return $this->belongsTo(
            Ane::class,
            ['rci_tipo_anest'],
            ['ane_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rci_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['rci_loc_cod'],
            ['loc_cod'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['rci_osm_num', 'rci_osm_num', 'rci_osm_serie', 'rci_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['rci_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rci_psv_cod', 'rci_psv_solic'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function rcis(): HasMany
    {
        return $this->hasMany(
            Rci::class,
            ['rci_num', 'rci_serie', 'rci_num', 'rci_serie'],
            ['rci_rci_num', 'rci_rci_num', 'rci_rci_serie', 'rci_rci_serie'],
        );
    }

    public function sit(): BelongsTo
    {
        return $this->belongsTo(
            Sit::class,
            ['rci_ccih_sit_cod'],
            ['sit_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rci_smk_cod', 'rci_smk_cod', 'rci_smk_tipo', 'rci_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
