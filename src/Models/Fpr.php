<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fpr extends OracleEloquent
{
    use Compoships;

    protected $table = 'fpr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fpr_label', 'fpr_frm_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['fpr_atr_num', 'fpr_atr_num', 'fpr_dsc_cod', 'fpr_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function exmCampo(): BelongsTo
    {
        return $this->belongsTo(
            ExmCampo::class,
            ['fpr_exm_campo_num', 'fpr_exm_campo_num', 'fpr_exm_cod', 'fpr_exm_cod'],
            ['exm_c_num', 'exm_c_exm_cod', 'exm_c_num', 'exm_c_exm_cod'],
        );
    }

    public function frm(): BelongsTo
    {
        return $this->belongsTo(
            Frm::class,
            ['fpr_frm_id'],
            ['frm_id'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['fpr_smk_cod', 'fpr_smk_cod', 'fpr_smk_tipo', 'fpr_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
