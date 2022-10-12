<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Umo extends OracleEloquent
{
    use Compoships;

    protected $table = 'umo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['umo_sigla'];

    protected $connection = 'smart';

    protected $guarded = [];
}
