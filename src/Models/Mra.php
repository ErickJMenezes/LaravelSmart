<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mra extends OracleEloquent
{
    use Compoships;

    protected $table = 'mra';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mra_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
