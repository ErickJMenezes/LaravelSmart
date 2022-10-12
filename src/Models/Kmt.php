<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Kmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'kmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['kmt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
