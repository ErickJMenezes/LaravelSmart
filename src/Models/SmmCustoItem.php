<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmmCustoItem extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smm_custo_smm_num', 'smm_custo_osm_num', 'smm_custo_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
