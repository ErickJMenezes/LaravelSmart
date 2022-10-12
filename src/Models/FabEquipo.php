<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FabEquipo extends OracleEloquent
{
    use Compoships;

    protected $table = 'fab_equipo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fab_equipo_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
