<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lsd extends OracleEloquent
{
    use Compoships;

    protected $table = 'lsd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lsd_numero', 'lsd_esd_cod_sauded', 'lsd_smk_tipo', 'lsd_smk_cod', 'lsd_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['lsd_atr_num', 'lsd_atr_num', 'lsd_atr_dsc', 'lsd_atr_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function esd(): BelongsTo
    {
        return $this->belongsTo(
            Esd::class,
            ['lsd_cnv_cod', 'lsd_cnv_cod', 'lsd_cnv_cod', 'lsd_smk_cod', 'lsd_smk_cod', 'lsd_smk_cod', 'lsd_smk_tipo', 'lsd_smk_tipo', 'lsd_smk_tipo'],
            ['esd_cnv_cod', 'esd_smk_cod', 'esd_smk_tipo', 'esd_cnv_cod', 'esd_smk_cod', 'esd_smk_tipo', 'esd_cnv_cod', 'esd_smk_cod', 'esd_smk_tipo'],
        );
    }
}
