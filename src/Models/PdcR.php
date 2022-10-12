<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PdcR extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc_r';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_r_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
