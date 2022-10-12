<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qcn extends OracleEloquent
{
    use Compoships;

    protected $table = 'qcn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qcn_dsc_cod', 'qcn_atr_num', 'qcn_qcm_id', 'qcn_smk_tipo', 'qcn_smk_cod', 'qcn_nivel'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['qcn_atr_num', 'qcn_atr_num', 'qcn_dsc_cod', 'qcn_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function qcm(): BelongsTo
    {
        return $this->belongsTo(
            Qcm::class,
            ['qcn_qcm_id'],
            ['qcm_id'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['qcn_smk_cod', 'qcn_smk_cod', 'qcn_smk_tipo', 'qcn_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
