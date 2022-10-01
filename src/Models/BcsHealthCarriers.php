<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsHealthCarriers extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_health_carriers';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_health_carriers_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
