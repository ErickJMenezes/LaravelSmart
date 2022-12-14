<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcePag extends OracleEloquent
{
    use Compoships;

    protected $table = 'pce_pag';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pce_pag_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
