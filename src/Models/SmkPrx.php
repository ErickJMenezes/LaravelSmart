<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkPrx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smk_p_smk_tipo', 'smk_p_smk_cod', 'smk_p_prx_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function prx(): BelongsTo
    {
        return $this->belongsTo(
            Prx::class,
            ['smk_p_prx_cod'],
            ['prx_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smk_p_smk_cod', 'smk_p_smk_cod', 'smk_p_smk_tipo', 'smk_p_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
