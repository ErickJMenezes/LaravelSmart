<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PvtDestino extends OracleEloquent
{
    use Compoships;

    protected $table = 'pvt_destino';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pvt_d_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
