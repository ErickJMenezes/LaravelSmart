<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TnAcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'tn_acc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tn_acc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tnAct(): BelongsTo
    {
        return $this->belongsTo(
            TnAct::class,
            ['tn_acc_act_id'],
            ['tn_act_id'],
        );
    }

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['tn_acc_atr_num', 'tn_acc_atr_num', 'tn_acc_dsc_cod', 'tn_acc_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['tn_acc_smk_cod', 'tn_acc_smk_cod', 'tn_acc_smk_tipo', 'tn_acc_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
