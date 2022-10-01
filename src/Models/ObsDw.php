<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ObsDw extends OracleEloquent
{
    use Compoships;

    protected $table = 'obs_dw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['obs_dw_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
