<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Scx extends OracleEloquent
{
    use Compoships;

    protected $table = 'scx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['scx_mte_serie', 'scx_mte_seq', 'scx_mcc_serie', 'scx_rdi_seq', 'scx_mcc_lote'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
