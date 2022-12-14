<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qplan extends OracleEloquent
{
    use Compoships;

    protected $table = 'qplan';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qplan_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
