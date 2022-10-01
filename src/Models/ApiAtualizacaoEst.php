<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ApiAtualizacaoEst extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['api_atualizacao_est_lote_num', 'api_atualizacao_est_mat_cod', 'api_atualizacao_est_cod_barra', 'api_atualizacao_est_sba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
