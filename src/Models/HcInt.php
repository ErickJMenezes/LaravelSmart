<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcInt extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_int';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_int_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
