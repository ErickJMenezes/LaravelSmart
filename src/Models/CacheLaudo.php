<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CacheLaudo extends OracleEloquent
{
    use Compoships;

    protected $table = 'cache_laudo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cache_laudo_numero', 'cache_laudo_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
