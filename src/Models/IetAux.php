<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IetAux extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['iet_aux_cod_amostra', 'iet_aux_cod_amostra_aux', 'iet_aux_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
