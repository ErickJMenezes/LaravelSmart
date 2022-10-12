<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rm625Pc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rm625_pc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rm625_pc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
