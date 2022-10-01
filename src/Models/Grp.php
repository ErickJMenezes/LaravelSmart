<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Grp extends OracleEloquent
{
    use Compoships;

    protected $table = 'grp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['grp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
