<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class InfSens extends OracleEloquent
{
    use Compoships;

    protected $table = 'inf_sens';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['inf_s_osm_serie', 'inf_s_pat_dsc_cod', 'inf_s_bac_dsc_cod', 'inf_s_osm_num', 'inf_s_smm_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
