<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Epp extends OracleEloquent
{
    use Compoships;

    protected $table = 'epp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epp_rco_cod', 'epp_dthr_ini', 'epp_lta_cod', 'epp_gfp_num', 'epp_tro_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gfp(): BelongsTo
    {
        return $this->belongsTo(
            Gfp::class,
            ['epp_gfp_num', 'epp_gfp_num', 'epp_lta_cod', 'epp_lta_cod'],
            ['gfp_num', 'gfp_lta_cod', 'gfp_num', 'gfp_lta_cod'],
        );
    }

    public function rco(): BelongsTo
    {
        return $this->belongsTo(
            Rco::class,
            ['epp_rco_cod', 'epp_rco_cod', 'epp_tro_cod', 'epp_tro_cod'],
            ['rco_cod', 'rco_tro_cod', 'rco_cod', 'rco_tro_cod'],
        );
    }
}
