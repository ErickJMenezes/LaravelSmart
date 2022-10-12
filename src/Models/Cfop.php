<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cfop extends OracleEloquent
{
    use Compoships;

    protected $table = 'cfop';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cfop_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
