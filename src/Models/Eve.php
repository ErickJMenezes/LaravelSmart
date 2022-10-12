<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eve extends OracleEloquent
{
    use Compoships;

    protected $table = 'eve';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eve_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
