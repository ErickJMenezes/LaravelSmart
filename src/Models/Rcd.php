<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcd extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcd_rcl_pac', 'rcd_rcl_dthr', 'rcd_rcl_cod', 'rcd_rcl_tpcod', 'rcd_atr_num', 'rcd_dsc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
