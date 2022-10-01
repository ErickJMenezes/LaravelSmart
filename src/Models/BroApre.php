<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroApre extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bro_apre_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}