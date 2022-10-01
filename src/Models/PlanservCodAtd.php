<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PlanservCodAtd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['planserv_cod_atd_cod_conv', 'planserv_cod_atd_str_solic', 'planserv_cod_atd_hsp_mod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
