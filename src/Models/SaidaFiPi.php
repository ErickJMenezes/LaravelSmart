<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SaidaFiPi extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['id_saida_fi_pi'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
