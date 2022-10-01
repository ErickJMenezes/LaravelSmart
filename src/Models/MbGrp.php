<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbGrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'mb_grp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mb_grp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
