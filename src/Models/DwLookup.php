<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwLookup extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_lookup';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_lookup_tipo', 'dw_lookup_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
