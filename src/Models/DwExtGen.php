<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtGen extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_ext_gen_mmyy', 'dw_ext_gen_dim'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
