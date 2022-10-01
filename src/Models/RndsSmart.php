<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RndsSmart extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rnds_s_item', 'rnds_s_valor'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
