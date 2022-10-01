<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CondPag extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cond_pag_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
