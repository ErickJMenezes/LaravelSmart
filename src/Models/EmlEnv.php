<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmlEnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'eml_env';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['e_env_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
