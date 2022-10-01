<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbCidProc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cp_cid', 'cp_proc', 'cp_cmpt_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
