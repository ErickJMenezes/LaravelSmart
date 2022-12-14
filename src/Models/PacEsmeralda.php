<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacEsmeralda extends OracleEloquent
{
    use Compoships;

    protected $table = 'pac_esmeralda';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];
}
