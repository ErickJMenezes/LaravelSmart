<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmInfcomplHpardini extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_infcompl_hpardini';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['num_exm_inf'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
