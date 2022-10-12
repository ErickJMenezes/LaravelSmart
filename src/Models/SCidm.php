<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SCidm extends OracleEloquent
{
    use Compoships;

    protected $table = 's_cidm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdn_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
