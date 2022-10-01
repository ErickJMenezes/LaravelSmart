<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbProcCbo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pcbo_cbo', 'pcbo_cmpt_ini', 'pcbo_proc'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
