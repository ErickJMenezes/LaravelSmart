<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mna extends OracleEloquent
{
    use Compoships;

    protected $table = 'mna';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mna_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
