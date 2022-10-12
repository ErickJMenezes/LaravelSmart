<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BroMotc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bro_motc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bro_motc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
