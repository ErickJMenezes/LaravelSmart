<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SPapa extends OracleEloquent
{
    use Compoships;

    protected $table = 's_papa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['papa_qtmax', 'papa_cont', 'papa_bpa', 'papa_trat', 'papa_princ', 'papa_inic', 'papa_secun'];

    protected $connection = 'smart';

    protected $guarded = [];
}
