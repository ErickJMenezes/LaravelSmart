<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcRede extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pc_rede_host'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
