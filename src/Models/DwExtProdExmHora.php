<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtProdExmHora extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_prod_exm_hora';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_prod_exm_hora_dim', 'dw_ext_prod_exm_hora_mmyy'];

    protected $connection = 'smart';

    protected $guarded = [];
}
