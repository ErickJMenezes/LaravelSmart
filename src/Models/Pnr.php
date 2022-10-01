<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pnr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pnr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pnl(): BelongsTo
    {
        return $this->belongsTo(
            Pnl::class,
            ['pnr_pnl_id'],
            ['pnl_id'],
        );
    }

    public function rls(): BelongsTo
    {
        return $this->belongsTo(
            Rls::class,
            ['pnr_rls_cod'],
            ['rls_cod'],
        );
    }
}
