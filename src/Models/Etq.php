<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Etq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['etq_mat_cod', 'etq_sba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['etq_mat_cod'],
            ['mat_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['etq_sba_cod'],
            ['sba_cod'],
        );
    }
}
