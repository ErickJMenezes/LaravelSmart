<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Aad extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['aad_dominio'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
