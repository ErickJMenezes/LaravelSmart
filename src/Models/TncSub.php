<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TncSub extends OracleEloquent
{
    use Compoships;

    protected $table = 'tnc_sub';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tnc_s_tnc_cod', 'tnc_s_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
