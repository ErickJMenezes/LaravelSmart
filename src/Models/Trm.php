<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Trm extends OracleEloquent
{
    use Compoships;

    protected $table = 'trm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
