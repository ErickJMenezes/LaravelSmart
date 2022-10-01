<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ppl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ppl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}