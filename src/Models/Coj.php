<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Coj extends OracleEloquent
{
    use Compoships;

    protected $table = 'coj';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['coj_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
