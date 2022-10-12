<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dsc extends OracleEloquent
{
    use Compoships;

    protected $table = 'dsc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dsc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
