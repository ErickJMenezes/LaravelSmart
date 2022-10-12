<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Grr extends OracleEloquent
{
    use Compoships;

    protected $table = 'grr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['grr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
