<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TJamilel7968646Cex extends OracleEloquent
{
    use Compoships;

    protected $table = 't_jamilel_7968646_cex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
