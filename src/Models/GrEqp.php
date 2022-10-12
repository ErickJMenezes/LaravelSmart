<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrEqp extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_eqp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_eqp_nome'];

    protected $connection = 'smart';

    protected $guarded = [];
}
