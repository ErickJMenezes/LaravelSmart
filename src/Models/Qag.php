<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qag extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['qag_grp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['qag_grp_cod'],
            ['grp_cod'],
        );
    }
}
