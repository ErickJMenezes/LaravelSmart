<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclEsmeralda extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl_esmeralda';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_tpcod', 'rcl_dthr', 'rcl_pac', 'rcl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
