<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RdiTef extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rdi_t_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
