<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iet extends OracleEloquent
{
    use Compoships;

    protected $table = 'iet';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iet_cod_amostra'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
