<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcTpaSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['hc_tpa_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hcTpa(): BelongsTo
    {
        return $this->belongsTo(
            HcTpa::class,
            ['hc_tpa_smk_hc_tpa_cod'],
            ['hc_tpa_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['hc_tpa_smk_smk_cod', 'hc_tpa_smk_smk_cod', 'hc_tpa_smk_smk_tipo', 'hc_tpa_smk_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
