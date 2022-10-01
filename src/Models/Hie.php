<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hie extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hie_pac_reg', 'hie_dthr_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['hie_cid_cod', 'hie_cid_cod', 'hie_cid_tip', 'hie_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['hie_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['hie_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['hie_emp_cod'],
            ['emp_cod'],
        );
    }

    public function hcMit(): BelongsTo
    {
        return $this->belongsTo(
            HcMit::class,
            ['hie_hc_mit_id'],
            ['hc_mit_id'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['hie_osm_num', 'hie_osm_num', 'hie_osm_serie', 'hie_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['hie_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['hie_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['hie_smk_cod', 'hie_smk_cod', 'hie_smk_tipo', 'hie_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
