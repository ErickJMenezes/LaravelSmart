<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cr extends OracleEloquent
{
    use Compoships;

    protected $table = 'cr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cr_sigla'];

    protected $connection = 'smart';

    protected $guarded = [];
}
