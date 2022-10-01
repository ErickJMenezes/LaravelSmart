<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PisTp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pis_t_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
