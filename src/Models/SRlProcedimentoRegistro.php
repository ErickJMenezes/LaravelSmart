<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SRlProcedimentoRegistro extends OracleEloquent
{
    use Compoships;

    protected $table = 's_rl_procedimento_registro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['co_procedimento', 'co_registro'];

    protected $connection = 'smart';

    protected $guarded = [];
}
