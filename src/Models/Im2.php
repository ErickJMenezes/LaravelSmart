<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Im2 extends OracleEloquent
{
    use Compoships;

    protected $table = 'im2';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['im2_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
