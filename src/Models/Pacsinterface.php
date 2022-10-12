<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pacsinterface extends OracleEloquent
{
    use Compoships;

    protected $table = 'pacsinterface';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cmdnum'];

    protected $connection = 'smart';

    protected $guarded = [];
}
