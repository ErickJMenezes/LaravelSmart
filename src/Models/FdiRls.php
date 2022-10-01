<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FdiRls extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fdi_fdl_id', 'fdi_rls_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fdl(): BelongsTo
    {
        return $this->belongsTo(
            Fdl::class,
            ['fdi_fdl_id'],
            ['fdl_id'],
        );
    }

    public function rls(): BelongsTo
    {
        return $this->belongsTo(
            Rls::class,
            ['fdi_rls_cod'],
            ['rls_cod'],
        );
    }
}
