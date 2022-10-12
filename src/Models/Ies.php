<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ies extends OracleEloquent
{
    use Compoships;

    protected $table = 'ies';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ies_smk_cod', 'ies_esr_cod', 'ies_smk_tipo', 'ies_dsc_cod', 'ies_atr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['ies_atr_num', 'ies_atr_num', 'ies_dsc_cod', 'ies_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function esr(): BelongsTo
    {
        return $this->belongsTo(
            Esr::class,
            ['ies_esr_cod'],
            ['esr_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ies_smk_cod', 'ies_smk_cod', 'ies_smk_tipo', 'ies_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
