<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cbhpm5Lpm extends OracleEloquent
{
    use Compoships;

    protected $table = 'cbhpm5_lpm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cod_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
