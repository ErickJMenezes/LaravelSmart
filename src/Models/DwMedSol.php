<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwMedSol extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_med_sol_mmyy', 'dw_med_sol_psv_cod_sol'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
