<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcMip extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_mip';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_mip_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
