<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ReinfTpServ extends OracleEloquent
{
    use Compoships;

    protected $table = 'reinf_tp_serv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['reinf_tp_serv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
