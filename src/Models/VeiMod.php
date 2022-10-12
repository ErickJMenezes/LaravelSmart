<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VeiMod extends OracleEloquent
{
    use Compoships;

    protected $table = 'vei_mod';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['v_mod_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
