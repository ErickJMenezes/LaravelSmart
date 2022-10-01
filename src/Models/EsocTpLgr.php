<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocTpLgr extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_tp_lgr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_tp_lgr_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
