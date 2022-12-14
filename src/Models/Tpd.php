<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tpd extends OracleEloquent
{
    use Compoships;

    protected $table = 'tpd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tpd_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
