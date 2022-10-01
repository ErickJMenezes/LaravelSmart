<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrSnv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cr_snv_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
