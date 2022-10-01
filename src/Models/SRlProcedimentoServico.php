<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SRlProcedimentoServico extends OracleEloquent
{
    use Compoships;

    protected $table = 's_rl_procedimento_servico';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['co_procedimento', 'co_servico', 'co_classificacao'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
