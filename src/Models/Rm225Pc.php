<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rm225Pc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rm225_pc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rm225_pc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
