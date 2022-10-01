<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TEfahel9462571Cex extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}