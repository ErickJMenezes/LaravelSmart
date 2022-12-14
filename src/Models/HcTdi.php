<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcTdi extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_tdi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_tdi_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
