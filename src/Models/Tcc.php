<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'tcc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
