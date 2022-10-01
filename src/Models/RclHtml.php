<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RclHtml extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcl_h_cod', 'rcl_h_pac', 'rcl_h_tpcod', 'rcl_h_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
