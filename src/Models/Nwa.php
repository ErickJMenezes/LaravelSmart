<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nwa extends OracleEloquent
{
    use Compoships;

    protected $table = 'nwa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nwa_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
