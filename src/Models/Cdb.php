<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cdb extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdb_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
