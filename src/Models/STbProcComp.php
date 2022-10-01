<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbProcComp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pc_tp_compat', 'pc_reg_sec', 'pc_reg_princ', 'pc_cmpt_ini', 'pc_proc_princ', 'pc_proc_sec'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
