<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpPsvFuncao extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_psv_funcao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_f_psv_cod', 'rhp_f_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
