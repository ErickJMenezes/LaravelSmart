<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgpdCfgCmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgpd_cfg_cmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lgpd_c_codigo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
