<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class UsuSapSmart1 extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pk_smart'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
