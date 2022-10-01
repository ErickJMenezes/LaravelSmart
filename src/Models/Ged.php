<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ged extends OracleEloquent
{
    use Compoships;

    protected $table = 'ged';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ged_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
