<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wcab extends OracleEloquent
{
    use Compoships;

    protected $table = 'wcab';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wcab_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
