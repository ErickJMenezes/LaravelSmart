<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bvi extends OracleEloquent
{
    use Compoships;

    protected $table = 'bvi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bvi_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
