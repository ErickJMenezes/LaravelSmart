<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdpPer extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cdp_p_dthr_ini', 'cdp_p_cdp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdp(): BelongsTo
    {
        return $this->belongsTo(
            Cdp::class,
            ['cdp_p_cdp_id'],
            ['cdp_id'],
        );
    }

    public function cdpTipo(): BelongsTo
    {
        return $this->belongsTo(
            CdpTipo::class,
            ['cdp_p_cdp_t_cod'],
            ['cdp_t_cod'],
        );
    }
}
