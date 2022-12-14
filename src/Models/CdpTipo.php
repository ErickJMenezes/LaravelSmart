<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdpTipo extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdp_tipo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdp_t_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
