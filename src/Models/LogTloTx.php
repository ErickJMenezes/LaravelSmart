<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogTloTx extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_tlo_tx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tlo_nu'];

    protected $connection = 'smart';

    protected $guarded = [];
}
