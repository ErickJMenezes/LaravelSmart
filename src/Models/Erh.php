<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Erh extends OracleEloquent
{
    use Compoships;

    protected $table = 'erh';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['erh_psv_cod', 'erh_gmr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
