<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclRod extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcl_rod';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_rod_rcl_pac', 'rcl_rod_rcl_tpcod', 'rcl_rod_rcl_cod', 'rcl_rod_rcl_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];
}
