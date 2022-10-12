<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tcr extends OracleEloquent
{
    use Compoships;

    protected $table = 'tcr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tcr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
