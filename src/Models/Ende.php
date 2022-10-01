<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ende extends OracleEloquent
{
    use Compoships;

    protected $table = 'ende';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ende_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
