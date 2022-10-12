<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fva extends OracleEloquent
{
    use Compoships;

    protected $table = 'fva';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fva_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
