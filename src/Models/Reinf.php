<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Reinf extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['reinf_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function reinfStatus(): BelongsTo
    {
        return $this->belongsTo(
            ReinfStatus::class,
            ['reinf_status'],
            ['reinf_status_cod'],
        );
    }
}
