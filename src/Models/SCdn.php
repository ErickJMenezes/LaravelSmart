<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SCdn extends OracleEloquent
{
    use Compoships;

    protected $table = 's_cdn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdn_tb', 'cdn_it'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
