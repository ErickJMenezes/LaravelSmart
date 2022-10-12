<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tes extends OracleEloquent
{
    use Compoships;

    protected $table = 'tes';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tes_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
