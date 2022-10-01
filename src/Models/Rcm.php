<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcm_pacote', 'rcm_smk_cod', 'rcm_cnv_cod', 'rcm_via_acesso'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rcm_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rcm_smk_cod', 'rcm_smk_cod', 'rcm_smk_tipo', 'rcm_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function via(): BelongsTo
    {
        return $this->belongsTo(
            Via::class,
            ['rcm_via_acesso'],
            ['via_cod'],
        );
    }
}
