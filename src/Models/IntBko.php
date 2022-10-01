<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IntBko extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['int_bko_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
