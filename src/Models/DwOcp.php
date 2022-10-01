<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwOcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ocp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ocp_smk_tipo', 'dw_ocp_smk_cod', 'dw_ocp_faixa_etaria', 'dw_ocp_sexo', 'dw_ocp_cid_cod', 'dw_ocp_tp_adm', 'dw_ocp_cln_cir', 'dw_ocp_mmyy', 'dw_ocp_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
