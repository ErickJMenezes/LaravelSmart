<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class B2bVersao extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['b2b_versao_codigo', 'b2b_versao_padrao'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
