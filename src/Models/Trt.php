<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Trt extends OracleEloquent
{
    use Compoships;

    protected $table = 'trt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trt_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
