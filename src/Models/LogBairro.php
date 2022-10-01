<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogBairro extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_bairro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bai_nu'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
