<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Org extends OracleEloquent
{
    use Compoships;

    protected $table = 'org';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['org_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
