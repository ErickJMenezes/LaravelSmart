<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CdpAdp extends OracleEloquent
{
    use Compoships;

    protected $table = 'cdp_adp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cdp_a_cdp_id', 'cdp_a_adp_tipo', 'cdp_a_adp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['cdp_a_adp_cod', 'cdp_a_adp_cod', 'cdp_a_adp_tipo', 'cdp_a_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function cdp(): BelongsTo
    {
        return $this->belongsTo(
            Cdp::class,
            ['cdp_a_cdp_id'],
            ['cdp_id'],
        );
    }
}
