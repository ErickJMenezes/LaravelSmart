<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ReinfRetorno extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['reinf_retorno_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
