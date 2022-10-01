<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcLacs extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['exc_lcs_exc_id', 'exc_lcs_mes', 'exc_lcs_lacs_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_lcs_exc_id'],
            ['exc_id'],
        );
    }

    public function lacsCt(): BelongsTo
    {
        return $this->belongsTo(
            LacsCt::class,
            ['exc_lcs_lacs_cod'],
            ['lacs_ct_cod'],
        );
    }
}
