<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EpcStatus extends OracleEloquent
{
    use Compoships;

    protected $table = 'epc_status';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epc_s_status', 'epc_s_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
