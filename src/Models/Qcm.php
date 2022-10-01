<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qcm extends OracleEloquent
{
    use Compoships;

    protected $table = 'qcm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qcm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
