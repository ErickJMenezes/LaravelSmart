<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntradaFiPi extends OracleEloquent
{
    use Compoships;

    protected $table = 'entrada_fi_pi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['id_entrada_fi_pi'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
