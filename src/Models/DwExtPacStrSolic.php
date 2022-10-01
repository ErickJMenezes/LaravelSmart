<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtPacStrSolic extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_pac_str_solic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_mmyy', 'dw_ext_psv_cod', 'dw_ext_str_unid', 'dw_ext_str_solic', 'dw_ext_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
