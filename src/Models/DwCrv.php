<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCrv extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_crv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_crv_smk_cod', 'dw_crv_cnv_cod', 'dw_crv_porte', 'dw_crv_psv_cod', 'dw_crv_smk_tipo', 'dw_crv_ind_mult', 'dw_crv_faixa_etaria', 'dw_crv_psv_solic', 'dw_crv_ctf_cod', 'dw_crv_mmyy', 'dw_crv_pac_sexo', 'dw_crv_tipo_fatura', 'dw_crv_str_solic'];

    protected $connection = 'smart';

    protected $guarded = [];
}
