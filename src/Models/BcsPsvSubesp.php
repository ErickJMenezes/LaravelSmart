<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsPsvSubesp extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_psv_subesp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_ps_bcs_subesp_id', 'bcs_ps_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
