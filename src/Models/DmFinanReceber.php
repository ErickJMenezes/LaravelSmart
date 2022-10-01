<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DmFinanReceber extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['serie', 'mcc_mmyy', 'lote', 'cfo_cod', 'ccr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
