<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogLocalidade extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_localidade';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['loc_nu'];

    protected $connection = 'smart';

    protected $guarded = [];
}
