<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SProc extends OracleEloquent
{
    use Compoships;

    protected $table = 's_proc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['proc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
