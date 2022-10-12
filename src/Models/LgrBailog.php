<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgrBailog extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgr_bailog';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['num_logr', 'num_imov_fina', 'num_bair', 'num_imov_inic'];

    protected $connection = 'smart';

    protected $guarded = [];
}
