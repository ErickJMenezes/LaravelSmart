<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvFila extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_fila';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_f_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
