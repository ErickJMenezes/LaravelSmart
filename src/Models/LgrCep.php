<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgrCep extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgr_cep';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['num_cep', 'num_logr'];

    protected $connection = 'smart';

    protected $guarded = [];
}
