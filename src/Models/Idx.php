<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Idx extends OracleEloquent
{
    use Compoships;

    protected $table = 'idx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['idx_n2', 'idx_n1', 'idx_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
