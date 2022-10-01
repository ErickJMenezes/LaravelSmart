<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcTpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_tpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_tpa_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
