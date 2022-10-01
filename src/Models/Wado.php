<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wado extends OracleEloquent
{
    use Compoships;

    protected $table = 'wado';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
