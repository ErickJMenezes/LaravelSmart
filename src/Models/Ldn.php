<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ldn extends OracleEloquent
{
    use Compoships;

    protected $table = 'ldn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ldn_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
