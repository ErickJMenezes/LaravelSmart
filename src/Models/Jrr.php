<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Jrr extends OracleEloquent
{
    use Compoships;

    protected $table = 'jrr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['jrr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
