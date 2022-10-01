<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Riq extends OracleEloquent
{
    use Compoships;

    protected $table = 'riq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['riq_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
