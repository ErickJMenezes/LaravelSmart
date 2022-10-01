<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Smp extends OracleEloquent
{
    use Compoships;

    protected $table = 'smp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smp_cod_simpro'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
