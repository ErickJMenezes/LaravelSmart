<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pan extends OracleEloquent
{
    use Compoships;

    protected $table = 'pan';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pan_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
