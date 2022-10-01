<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ConcilLog extends OracleEloquent
{
    use Compoships;

    protected $table = 'concil_log';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['data_venda', 'valor', 'nsu_adquirinte', 'parcela'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
