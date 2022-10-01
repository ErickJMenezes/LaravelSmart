<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrtUfe extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['trt_u_trt_c_id', 'trt_u_ufe_sigla', 'trt_u_ufe_pai_sigla'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
