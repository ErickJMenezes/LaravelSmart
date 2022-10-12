<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcAgulha extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_agulha';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_agulha_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
