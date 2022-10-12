<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdcConfigSerie extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdc_config_serie';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdc_config_serie_codigo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
