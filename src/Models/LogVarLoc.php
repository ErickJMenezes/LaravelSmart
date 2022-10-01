<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogVarLoc extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_var_loc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['val_nu', 'loc_nu'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
