<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Asv extends OracleEloquent
{
    use Compoships;

    protected $table = 'asv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['asv_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
