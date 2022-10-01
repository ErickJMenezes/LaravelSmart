<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbProcedimento extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['co_procedimento', 'dt_competencia'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
