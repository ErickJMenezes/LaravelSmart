<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtraTat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dw_extra_tat_smk_tipo', 'dw_extra_tat_mmyy', 'dw_extra_tat_str_solic', 'dw_extra_tat_ind_urg', 'dw_extra_tat_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
