<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mli extends OracleEloquent
{
    use Compoships;

    protected $table = 'mli';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mli_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
