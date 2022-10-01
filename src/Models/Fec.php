<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fec extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fec_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
