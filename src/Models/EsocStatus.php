<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocStatus extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['esoc_status_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
