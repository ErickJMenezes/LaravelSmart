<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pss extends OracleEloquent
{
    use Compoships;

    protected $table = 'pss';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pss_psv_cod', 'pss_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
