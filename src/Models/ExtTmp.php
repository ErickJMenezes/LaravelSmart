<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExtTmp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ext_smm_num', 'ext_mns_serie', 'ext_mns_num', 'ext_osm_serie', 'ext_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
