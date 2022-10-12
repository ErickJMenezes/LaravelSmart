<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrtComercial extends OracleEloquent
{
    use Compoships;

    protected $table = 'trt_comercial';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trt_c_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
