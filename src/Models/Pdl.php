<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pdl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pdl_serie', 'pdl_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
