<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtCons extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_cons';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_t_psv_cod_exe', 'dw_ext_t_str_solic', 'dw_ext_t_esp_cod', 'dw_ext_cons_mmyy', 'dw_ext_t_str_exec'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
