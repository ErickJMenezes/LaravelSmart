<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrakWs extends OracleEloquent
{
    use Compoships;

    protected $table = 'trak_ws';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trak_ws_ambiente', 'trak_ws_metodo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
