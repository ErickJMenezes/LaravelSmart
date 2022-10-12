<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fab extends OracleEloquent
{
    use Compoships;

    protected $table = 'fab';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fab_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
