<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ciclos extends OracleEloquent
{
    use Compoships;

    protected $table = 'ciclos';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ciclos'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
