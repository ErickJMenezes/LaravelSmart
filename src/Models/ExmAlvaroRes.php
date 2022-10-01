<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmAlvaroRes extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['id_resultado'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
