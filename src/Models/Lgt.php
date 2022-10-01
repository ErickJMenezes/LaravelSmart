<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lgt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lgt_dt_ini', 'lgt_str_cod', 'lgt_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
