<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtTempoExame extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_tempo_exame';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_t_str_exec', 'dw_ext_t_mmyy', 'dw_ext_t_smk_tipo', 'dw_ext_t_smk_cod', 'dw_ext_t_psv_cod', 'dw_ext_t_modalidade', 'dw_ext_t_str_unid', 'dw_ext_t_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
