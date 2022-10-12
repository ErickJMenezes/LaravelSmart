<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpPsvResidencia extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_psv_residencia';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_r_psv_cod', 'rhp_r_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
