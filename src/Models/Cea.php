<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cea extends OracleEloquent
{
    use Compoships;

    protected $table = 'cea';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cea_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
