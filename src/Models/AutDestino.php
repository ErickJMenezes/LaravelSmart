<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AutDestino extends OracleEloquent
{
    use Compoships;

    protected $table = 'aut_destino';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aut_d_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
