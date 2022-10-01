<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bmo extends OracleEloquent
{
    use Compoships;

    protected $table = 'bmo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bmo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
