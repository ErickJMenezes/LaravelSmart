<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NexoPsc extends OracleEloquent
{
    use Compoships;

    protected $table = 'nexo_psc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nexo_psc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
