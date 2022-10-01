<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dce extends OracleEloquent
{
    use Compoships;

    protected $table = 'dce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dce_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
