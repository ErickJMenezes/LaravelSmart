<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Itg extends OracleEloquent
{
    use Compoships;

    protected $table = 'itg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['itg_origem_2', 'itg_destino_2', 'itg_integracao', 'itg_contexto', 'itg_origem_1', 'itg_destino_1'];

    protected $connection = 'smart';

    protected $guarded = [];
}
