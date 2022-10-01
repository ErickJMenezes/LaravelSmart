<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LacsCt extends OracleEloquent
{
    use Compoships;

    protected $table = 'lacs_ct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lacs_ct_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
