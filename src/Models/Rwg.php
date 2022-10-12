<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rwg extends OracleEloquent
{
    use Compoships;

    protected $table = 'rwg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rwg_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
