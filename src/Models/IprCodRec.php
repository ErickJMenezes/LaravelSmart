<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IprCodRec extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ipr_cod_rec_ipr_cod', 'ipr_cod_rec_codigo', 'ipr_cod_rec_variacao', 'ipr_cod_rec_periodicidade'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
