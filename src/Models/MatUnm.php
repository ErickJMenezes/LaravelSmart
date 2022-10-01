<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MatUnm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mat_u_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mat_u_mat_cod'],
            ['mat_cod'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['mat_u_unm_cod'],
            ['unm_cod'],
        );
    }
}
