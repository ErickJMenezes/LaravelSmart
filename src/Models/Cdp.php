<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cdp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cdp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdpTipo(): BelongsTo
    {
        return $this->belongsTo(
            CdpTipo::class,
            ['cdp_tipo'],
            ['cdp_t_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cdp_smk_cod', 'cdp_smk_cod', 'cdp_smk_tipo', 'cdp_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
