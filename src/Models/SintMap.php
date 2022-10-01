<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SintMap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sint_map_tipo', 'sint_map_qtd', 'sint_map_cod_pag'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
