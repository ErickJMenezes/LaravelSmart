<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hco extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hco_osm_serie', 'hco_data_alteracao', 'hco_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}