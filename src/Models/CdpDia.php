<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdpDia extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdp_dia';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdp_d_id', 'cdp_d_tipo', 'cdp_d_dia'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cdp(): BelongsTo
    {
        return $this->belongsTo(
            Cdp::class,
            ['cdp_d_id'],
            ['cdp_id'],
        );
    }

    public function cdpTipo(): BelongsTo
    {
        return $this->belongsTo(
            CdpTipo::class,
            ['cdp_d_tipo'],
            ['cdp_t_cod'],
        );
    }
}
