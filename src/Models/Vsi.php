<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vsi extends OracleEloquent
{
    use Compoships;

    protected $table = 'vsi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vsi_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
