<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DmplDlpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'dmpl_dlpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dmpl_dlpa_codigo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
