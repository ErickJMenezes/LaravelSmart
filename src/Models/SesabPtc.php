<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabPtc extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesab_ptc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sesab_ptc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
