<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RpaTmp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rpa_qst_cod', 'rpa_apq_cod', 'rpa_pgt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
