<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroExig extends OracleEloquent
{
    use Compoships;

    protected $table = 'bro_exig';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bro_exig_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
