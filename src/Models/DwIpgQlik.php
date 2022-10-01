<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwIpgQlik extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_ipg_compet', 'dw_ipg_ccr', 'dw_ipg_ind', 'dw_ipg_str', 'dw_ipg_compet_proc', 'dw_ipg_cfo', 'dw_ipg_emp', 'dw_ipg_gcc'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
