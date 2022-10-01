<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocRetorno extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_retorno';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_tipo', 'esoc_retorno_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
