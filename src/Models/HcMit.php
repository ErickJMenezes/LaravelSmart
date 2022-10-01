<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcMit extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hc_mit_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
