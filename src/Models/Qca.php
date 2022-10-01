<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qca extends OracleEloquent
{
    use Compoships;

    protected $table = 'qca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qca_qcn_smk_cod', 'qca_qcn_dsc_cod', 'qca_dthr', 'qca_qcn_smk_tipo', 'qca_qcn_nivel', 'qca_qcn_qcm_id', 'qca_qcn_atr_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
