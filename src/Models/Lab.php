<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lab extends OracleEloquent
{
    use Compoships;

    protected $table = 'lab';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lab_codi'];

    protected $connection = 'smart';

    protected $guarded = [];
}
