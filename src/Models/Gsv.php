<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gsv extends OracleEloquent
{
    use Compoships;

    protected $table = 'gsv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gsv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
