<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AutDestino extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['aut_d_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
