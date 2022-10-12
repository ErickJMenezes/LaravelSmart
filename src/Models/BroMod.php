<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroMod extends OracleEloquent
{
    use Compoships;

    protected $table = 'bro_mod';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bro_mod_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
