<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PdcP extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc_p';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_p_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
