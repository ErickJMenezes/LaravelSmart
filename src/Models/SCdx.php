<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SCdx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cdx_tb2', 'cdx_it2', 'cdx_tb1', 'cdx_it1'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
