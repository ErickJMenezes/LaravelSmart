<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SPacid extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pacid_cmp', 'pacid_pa', 'pacid_cid'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
