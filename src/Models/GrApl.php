<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrApl extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_apl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_apl_eqp_nome', 'gr_apl_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
