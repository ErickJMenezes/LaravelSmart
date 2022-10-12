<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Scl extends OracleEloquent
{
    use Compoships;

    protected $table = 'scl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['scl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
