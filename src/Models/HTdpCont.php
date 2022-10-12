<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HTdpCont extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_tdp_cont';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_tdp_cont_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
