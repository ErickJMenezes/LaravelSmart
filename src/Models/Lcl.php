<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lcl extends OracleEloquent
{
    use Compoships;

    protected $table = 'lcl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lcl_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
