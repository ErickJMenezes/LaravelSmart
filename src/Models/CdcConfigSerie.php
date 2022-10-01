<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdcConfigSerie extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cdc_config_serie_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}