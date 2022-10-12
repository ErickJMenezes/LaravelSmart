<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmAlvaro extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_alvaro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
