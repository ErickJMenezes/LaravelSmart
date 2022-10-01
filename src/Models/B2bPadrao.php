<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class B2bPadrao extends OracleEloquent
{
    use Compoships;

    protected $table = 'b2b_padrao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['b2b_padrao_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
