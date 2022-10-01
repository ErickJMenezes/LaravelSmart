<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LayoutEtqStr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['layout_etq_str_letq_cod', 'layout_etq_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
