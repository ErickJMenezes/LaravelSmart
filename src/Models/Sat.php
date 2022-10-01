<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sat extends OracleEloquent
{
    use Compoships;

    protected $table = 'sat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
