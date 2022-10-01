<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmartbiLimite extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['limite_ano', 'limite_seq', 'limite_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];
}