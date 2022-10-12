<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Liu extends OracleEloquent
{
    use Compoships;

    protected $table = 'liu';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['liu_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
