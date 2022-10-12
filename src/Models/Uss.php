<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Uss extends OracleEloquent
{
    use Compoships;

    protected $table = 'uss';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['uss_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
