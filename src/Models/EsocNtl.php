<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocNtl extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_ntl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_ntl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
