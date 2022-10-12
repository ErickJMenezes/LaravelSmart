<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dbo extends OracleEloquent
{
    use Compoships;

    protected $table = 'dbo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
