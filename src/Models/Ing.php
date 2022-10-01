<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ing extends OracleEloquent
{
    use Compoships;

    protected $table = 'ing';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ing_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
