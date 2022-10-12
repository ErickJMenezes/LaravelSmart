<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SPacbo extends OracleEloquent
{
    use Compoships;

    protected $table = 's_pacbo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pacbo_cmp', 'pacbo_pa', 'pacbo_cbo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
