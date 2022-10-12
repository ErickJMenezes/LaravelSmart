<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cex extends OracleEloquent
{
    use Compoships;

    protected $table = 'cex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cex_smk_cod', 'cex_dsc_cod', 'cex_atr_num', 'cex_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['cex_atr_num', 'cex_atr_num', 'cex_dsc_cod', 'cex_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cex_smk_cod', 'cex_smk_cod', 'cex_smk_tipo', 'cex_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
