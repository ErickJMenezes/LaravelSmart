<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HonGrupo extends OracleEloquent
{
    use Compoships;

    protected $table = 'hon_grupo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hon_grupo_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
