<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Agw extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['agw_tpctf', 'agw_dthr_ini', 'agw_med', 'agw_loc', 'agw_ctf'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
