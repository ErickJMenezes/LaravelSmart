<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdcConfig extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdc_config';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdc_config_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
