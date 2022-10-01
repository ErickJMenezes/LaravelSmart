<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtAuditConta extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_audit_conta';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_audit_conta_cnv_cod', 'dw_ext_audit_conta_valor', 'dw_ext_audit_conta_str_solic', 'dw_ext_audit_conta_smk_tipo', 'dw_ext_audit_conta_mmyy', 'dw_ext_audit_conta_str_exec', 'dw_ext_audit_conta_smk_cod', 'dw_ext_audit_conta_mog_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
