<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cnt extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnt_tipo', 'cnt_serie'];

    protected $connection = 'smart';

    protected $guarded = [];
}
