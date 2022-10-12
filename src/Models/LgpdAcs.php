<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgpdAcs extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgpd_acs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lgpd_a_modulo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
