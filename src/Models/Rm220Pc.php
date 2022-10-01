<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rm220Pc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rm220_pc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rm220_pc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
