<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nop extends OracleEloquent
{
    use Compoships;

    protected $table = 'nop';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nop_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
