<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LcpTxt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lcp_t_campo', 'lcp_t_valor'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
