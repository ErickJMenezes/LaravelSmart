<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ReinfStatus extends OracleEloquent
{
    use Compoships;

    protected $table = 'reinf_status';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['reinf_status_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
