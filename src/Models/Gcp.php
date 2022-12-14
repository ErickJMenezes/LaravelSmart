<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'gcp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gcp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
