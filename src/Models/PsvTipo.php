<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvTipo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['psv_tipo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
