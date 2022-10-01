<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Coj extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['coj_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
