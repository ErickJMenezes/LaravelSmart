<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gss extends OracleEloquent
{
    use Compoships;

    protected $table = 'gss';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gss_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
