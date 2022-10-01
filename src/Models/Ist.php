<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ist extends OracleEloquent
{
    use Compoships;

    protected $table = 'ist';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ist_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
