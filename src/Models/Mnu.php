<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mnu extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mnu_apl_cod', 'mnu_obj', 'mnu_item'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
