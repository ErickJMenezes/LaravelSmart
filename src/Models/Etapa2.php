<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Etapa2 extends OracleEloquent
{
    use Compoships;

    protected $table = 'etapa2';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcl_pac', 'rcl_tpcod', 'rcl_dthr', 'rcl_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
