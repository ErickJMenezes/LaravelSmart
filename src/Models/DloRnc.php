<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloRnc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dlo_r_rnc_serie', 'dlo_r_rnc_num', 'dlo_r_dlo_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
