<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Unm extends OracleEloquent
{
    use Compoships;

    protected $table = 'unm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['unm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
