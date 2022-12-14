<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dts extends OracleEloquent
{
    use Compoships;

    protected $table = 'dts';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dts_dt_ref', 'dts_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
