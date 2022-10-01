<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bus extends OracleEloquent
{
    use Compoships;

    protected $table = 'bus';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bus_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
