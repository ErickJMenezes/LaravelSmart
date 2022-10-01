<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qce extends OracleEloquent
{
    use Compoships;

    protected $table = 'qce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qce_elb_cod', 'qce_qcm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
