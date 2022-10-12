<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ane extends OracleEloquent
{
    use Compoships;

    protected $table = 'ane';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ane_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
