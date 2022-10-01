<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CriacaoReserva extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['numero_solic_smart', 'item_reserva', 'serie_solic_smart'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
