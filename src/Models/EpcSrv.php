<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EpcSrv extends OracleEloquent
{
    use Compoships;

    protected $table = 'epc_srv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epc_s_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
