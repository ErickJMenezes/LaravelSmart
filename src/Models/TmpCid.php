<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TmpCid extends OracleEloquent
{
    use Compoships;

    protected $table = 'tmp_cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];
}
