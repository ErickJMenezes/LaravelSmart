<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocAmb extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_amb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_amb_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
